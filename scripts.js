Vue.component('line-chart', {
  extends: VueChartJs.Line,
  props: ['info'],
  data: function () {
    return {
      config: this.info,
      opitions: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          yAxes: [
            {
              // stacked: true,
              gridLines: {
                display: true,
                color: '#fff',
                borderDash: [1, 1],
                drawTicks: false,
              },
              ticks: {
                fontColor: "#fff",
                fontSize: 16,
                padding: 15,
                fontFamily: "Rubik",
              }
            }
          ],
          xAxes: [
            {
              gridLines: {
                display: true,
                color: '#fff',
                borderDash: [1, 1],
                drawTicks: false,
              },
              ticks: {
                fontColor: "#fff",
                fontSize: 16,
                padding: 15,
                fontFamily: "Rubik",
              }
            }
          ]
        }
      },
      renderData: {
        labels: [],
        datasets: [
          {
            label: 'Левый глаз',
            data: [],
            borderColor: '#2B51A7',
            borderWidth: 3,
            pointBorderWidth: 3,
            pointBorderColor: '#fff',
            pointBackgroundColor: '#2B51A7',
            pointRadius: 3.5,
            pointHitRadius: 6.5,
            backgroundColor: 'rgba(43, 81, 167, 0.3)',
            pointHoverRadius: 3.5,
            pointHoverBorderWidth: 3,
            dataId: 'left',
            lineTension: 0
          },
          {
            label: 'Правый глаз',
            data: [],
            borderColor: '#F9B400',
            borderWidth: 3,
            pointBorderWidth: 3,
            pointBorderColor: '#fff',
            pointBackgroundColor: '#F9B400',
            pointRadius: 3.5,
            pointHitRadius: 6.5,
            backgroundColor: 'rgba(249, 180, 0, 0.3)',
            pointHoverRadius: 3.5,
            pointHoverBorderWidth: 3,
            dataId: 'right',
            lineTension: 0
          },
        ]
      }
    }
  },
  methods: {
    xAxesGenerate() {
      let startAge = +this.config.age
      let endAge = this.config.sex === 'sex-1' ? 18 : 17
      let agesArr = []
      for (let i = startAge; i <= endAge; i++) {
        agesArr.push(i)
      }
      this.renderData.labels = agesArr
    },
    getNUMB_myopiaDegree(eyeSide) {
      let myopiaDegree = null;
      if (this.info.eye[eyeSide].myopia <= 3) {
        myopiaDegree = 0.1
      } else if (this.info.eye[eyeSide].myopia > 3) {
        myopiaDegree = 0.15
      }
      return myopiaDegree
    },
    NUMB_riskFactors() {
      let NUMB_riskFactors = null;
      if (this.info.risksFactors.length === 1) {
        NUMB_riskFactors = 0.25
      } else if (this.info.risksFactors.length >= 2) {
        NUMB_riskFactors = 0.5
      } else {
        NUMB_riskFactors = 0;
      }
      return NUMB_riskFactors
    },
    NUMB_controlMethods(eyeSide) {
      let myopiaDegree = null;
      let cMethod = this.info.controlMethods
      let numb_control = null
      if (this.info.eye[eyeSide].myopia <= 3) {
        myopiaDegree = 1
      } else if (this.info.eye[eyeSide].myopia > 3 && this.info.eye[eyeSide].myopia < 6.25) {
        myopiaDegree = 2
      } else if (this.info.eye[eyeSide].myopia >= 6.25) {
        myopiaDegree = 3
      }

      if (cMethod == 1 && myopiaDegree == 1) {
        numb_control = {
          type: 'percent',
          numb: 34
        }
      } else if (cMethod == 1 && myopiaDegree == 2) {
        numb_control = {
          type: 'percent',
          numb: 65
        }
      } else if (cMethod == 1 && myopiaDegree == 3) {
        numb_control = {
          type: 'percent',
          numb: 65
        }
      } else if (cMethod == 2 && myopiaDegree == 1) {
        numb_control = {
          type: 'numb',
          numb: 0.088
        }
      } else if (cMethod == 2 && myopiaDegree == 2) {
        numb_control = {
          type: 'numb',
          numb: 0.088
        }
      } else if (cMethod == 2 && myopiaDegree == 3) {
        numb_control = {
          type: 'numb',
          numb: 0.044
        }
      } else if (cMethod == 3) {
        numb_control = {
          type: 'zero',
          numb1: 0.03,
          numb2: 0.1
        }
      }

      return numb_control
    },
    getAnnualIncrNumb(eyeSide) {
      if (!this.info.eye[eyeSide].annualIncr) {
        let NUMB_myopiaDegree = this.getNUMB_myopiaDegree(eyeSide)
        let NUMB_riskFactors = this.NUMB_riskFactors()
        let NUMB_controlMethods = this.NUMB_controlMethods(eyeSide)
        
        let numb2 = NUMB_myopiaDegree * NUMB_riskFactors
        let numb3 = null
        if (NUMB_controlMethods.type === 'percent') {
          numb3 = ((NUMB_myopiaDegree + numb2) * NUMB_controlMethods.numb) / 100
        } else if (NUMB_controlMethods.type === 'numb') {
          numb3 = NUMB_controlMethods.numb
        }



        this.info.eye[eyeSide].annualIncrNumb = (NUMB_myopiaDegree + numb2 - numb3).toFixed(2)
        this.yAxesGenerateAnnualData(eyeSide)
      } else {
        this.yAxesGenerateAnnualData(eyeSide)
      }
    },
    yAxesGenerateAnnualData(eyeSide) {
      let y0 = +this.info.eye[eyeSide].eyeSize
      let arrOfSizes = [y0]

      for (let i = 1; i < this.renderData.labels.length; i++) {
        let nonControlMethodCorrection = 0
        if (this.NUMB_controlMethods(eyeSide).type === 'zero' && this.renderData.labels[i] < 13) {
          nonControlMethodCorrection = 0.03
        } else if (this.NUMB_controlMethods(eyeSide).type === 'zero' && this.renderData.labels[i] >= 13) {
          nonControlMethodCorrection = 0.1
        }
        y0 += (+this.info.eye[eyeSide].annualIncrNumb - nonControlMethodCorrection)
        arrOfSizes.push(y0.toFixed(2))
      }
      this.$emit('refractio-method', { eyeSide: eyeSide, annualIncrNumb: arrOfSizes })
      this.renderData.datasets.find(item => item.dataId === eyeSide).data = arrOfSizes
    }
  },
  watch: {
    // info: {
    //   handler: function () {
    //     this.xAxesGenerate()
    //     this.info.eye.right.isTrue ? this.getAnnualIncrNumb('right') : false;
    //     this.info.eye.left.isTrue ? this.getAnnualIncrNumb('left') : false;
    //     this.renderChart(this.renderData, this.opitions)
    //   },
    //   deep: true
    // },
  },
  mounted() {
    this.xAxesGenerate()
    this.info.eye.right.isTrue ? this.getAnnualIncrNumb('right') : false;
    this.info.eye.left.isTrue ? this.getAnnualIncrNumb('left') : false;
    this.renderChart(this.renderData, this.opitions)
  }
})




Vue.component('line-chart-refractio', {
  extends: VueChartJs.Line,
  props: ['info'],
  data: function () {
    return {
      config: this.info,
      opitions: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          yAxes: [
            {
              // stacked: true,
              gridLines: {
                display: true,
                color: '#fff',
                borderDash: [1, 1],
                drawTicks: false,
              },
              ticks: {
                fontColor: "#fff",
                fontSize: 16,
                padding: 15,
                fontFamily: "Rubik",
              }
            }
          ],
          xAxes: [
            {
              gridLines: {
                display: true,
                color: '#fff',
                borderDash: [1, 1],
                drawTicks: false,
              },
              ticks: {
                fontColor: "#fff",
                fontSize: 16,
                padding: 15,
                fontFamily: "Rubik",
              }
            }
          ]
        }
      },
      renderData: {
        labels: [],
        datasets: [
          {
            label: 'Левый глаз',
            data: [],
            borderColor: '#2B51A7',
            borderWidth: 3,
            pointBorderWidth: 3,
            pointBorderColor: '#fff',
            pointBackgroundColor: '#2B51A7',
            pointRadius: 3.5,
            pointHitRadius: 6.5,
            backgroundColor: 'rgba(43, 81, 167, 0.3)',
            pointHoverRadius: 3.5,
            pointHoverBorderWidth: 3,
            dataId: 'left',
            lineTension: 0
          },
          {
            label: 'Правый глаз',
            data: [],
            borderColor: '#F9B400',
            borderWidth: 3,
            pointBorderWidth: 3,
            pointBorderColor: '#fff',
            pointBackgroundColor: '#F9B400',
            pointRadius: 3.5,
            pointHitRadius: 6.5,
            backgroundColor: 'rgba(249, 180, 0, 0.3)',
            pointHoverRadius: 3.5,
            pointHoverBorderWidth: 3,
            dataId: 'right',
            lineTension: 0
          },
        ]
      }
    }
  },
  methods: {
    xAxesGenerate() {
      let startAge = +this.config.age
      let endAge = this.config.sex === 'sex-1' ? 18 : 17
      let agesArr = []
      for (let i = startAge; i <= endAge; i++) {
        agesArr.push(i)
      }
      this.renderData.labels = agesArr
    },
    yAxesGenerateAnnualData(eyeSide) {
      let z0 = +this.info.eye[eyeSide].myopia
      let zArr = [z0]
      for (let i = 1; i < this.renderData.labels.length; i++) {
        let refractio = (((+this.info.eye[eyeSide].annualIncrNumb[i] - +this.info.eye[eyeSide].annualIncrNumb[i - 1]) * 0.33) / 0.1).toFixed(2)
        console.log(refractio)
        z0 += +refractio 
        zArr.push(z0.toFixed(2))
      }
      this.renderData.datasets.find(item => item.dataId === eyeSide).data = zArr
    }
  },
  watch: {
    info: {
      handler: function () {
        this.xAxesGenerate()
        this.info.eye.right.isTrue ? this.yAxesGenerateAnnualData('right') : false;
        this.info.eye.left.isTrue ? this.yAxesGenerateAnnualData('left') : false;
        
        this.renderChart(this.renderData, this.opitions)
      },
      deep: true
    },
  },
  mounted() {
    this.xAxesGenerate()
    this.info.eye.right.isTrue ? this.yAxesGenerateAnnualData('right') : false;
    this.info.eye.left.isTrue ? this.yAxesGenerateAnnualData('left') : false;

    this.renderChart(this.renderData, this.opitions)
  }
})



var vm = new Vue({
  el: '#calc-app',
  data () {
    return {
      isModal: false,
      currentStep: '1',
      currentEye: null,
      isBoth: false,
      info: {
        sex: '',
        age: 11,
        risksFactors: [],
        controlMethods: '',
        eye: {
          left: {
            isTrue: false,
            myopia: '',
            eyeSize: '',
            keratometries: '',
            annualIncr: false,
            annualIncrNumb: ''
          },
          right: {
            isTrue: false,
            myopia: '',
            eyeSize: '',
            keratometries: '',
            annualIncr: false,
            annualIncrNumb: ''
          },
        }
      }
    }
  },
  methods: {
    riskFactorsMethod (e) {
      if(e.checked) {
        this.info.risksFactors.push(e.value)
      } else {
        this.info.risksFactors.splice(this.info.risksFactors.findIndex(i => i ===e.value), 1)
      }
    },
    refractioMethod (obj) {
      this.info.eye[obj.eyeSide].annualIncrNumb = obj.annualIncrNumb
    },
    CHOOSING_sex(item) {
      this.info.sex = item
    },
    CHOOSING_riskFactors(item) {
      let isSelected = this.info.risksFactors.find(i => i === item) ? true : false
      if(isSelected) {
        this.info.risksFactors.splice(this.info.risksFactors.findIndex(i => i === item), 1)
      } else {
        this.info.risksFactors.push(item)
      }
    },
    CHOOSING_controlMethods(item) {
      this.info.controlMethods = item
    },
    CHOOSING_eye(eye) {
      // this.info.eye.right.isTrue = false
      // this.info.eye.left.isTrue = false
      this.info.eye[eye].isTrue = !this.info.eye[eye].isTrue

      // this.currentEye = eye
      // this.currentStep = '6'
    },
    nextStepChoosingEye() {
      if(this.info.eye.left.isTrue && this.info.eye.right.isTrue) {
        this.isBoth = true
        this.currentEye = 'left'
      } else {
        this.isBoth = false
        this.currentEye = this.info.eye.left.isTrue ? 'left' : 'right'
      }
      this.currentStep = '6'
    },
    continueMethod() {
      this.currentEye = 'right'
      this.currentStep = '6'
    },
    formatting(e, eye, input) {
      // if(+e.value >= 100) {
      //   e.value = 99
      // } else if (+e.value <= 0) {
      //   e.value = 0
      // }
      // let val = (+e.value).toFixed(2)
      // let val = (Math.round(+e.value * 100) / 100).toFixed(2)
      // e.value = val
      this.info.eye[eye][input] = e.value
    },
    nextStep(nextStep) {
      this.currentStep = nextStep
    },
    chooseEyeAndStep(eye, step) {
      this.info.eye[eye].isTrue = true
      this.currentEye = eye
      this.currentStep = step
    },
    calculate() {
      this.isModal = false
      this.currentEye = 'graph'
      this.currentStep = 'graph'
    },
    areYouSure() {
      this.isModal = true
    }
  },
  computed: {
    getYears() {
      let arr = []
      for (let i = this.info.age; i < (this.info.sex === 'sex-1' ? 18 : 17) + 1; i++) {
        arr.push(i)
      }
      return arr
    }
  },
  watch: {
    
  }
})