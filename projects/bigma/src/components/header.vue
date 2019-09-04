<template>
	<div id="header" class="container-fluid2" :class="fixedMenu">
		<router-link class="header-logo" to="/"><img src="../assets/logo.png" alt=""></router-link>
		<div class="burger-menu" @click="menuToggle" :class="styleAfterBurger">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div v-if="isMenuVissible" class="header-menu">
			<div class="header-menu-caption">
				<router-link tag="div" to="/profile" class="header-menu-caption-div">
					<img src="../assets/shutdown.png" alt="">
					<div class="header-menu-caption-text">
						<p class="header-menu-caption-title">Bigma</p>
						<p class="header-menu-caption-smallTitle">Территория выгодных покупок!</p>
					</div>
				</router-link>
				<div class="header-menu-caption-dots">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<router-link to="/registration" tag="div" class="header-menu-caption-2">
				<img src="../assets/messenger-user-avatar.png" alt="" class="header-menu-caption-2-icon">
				<p class="header-menu-caption-2-title">Войти</p>
				<img class="header-menu-caption-2-close" src="../assets/close.png">
			</router-link>
			<div class="header-menu-text">
				<p class="header-menu-text-item">Выбор города</p>
			</div>
			<router-link tag="div" to="/favourites" class="header-menu-text">
				<p class="header-menu-text-item">Избранное</p>
			</router-link>
			<div class="header-menu-text">
				<p class="header-menu-text-item">Новые по избранным</p>
			</div>
			<div class="header-menu-text">
				<p class="header-menu-text-item">Push - уведомления</p>
			</div>
			<router-link tag="div" to="/our-plan" class="header-menu-text-smaller header-menu-text-smaller-firstChild">
				<p class="header-menu-text-smaller-item">Реклама в Bigma</p>
			</router-link>
			<router-link tag="div" to="/add-org" class="header-menu-text-smaller-organization">
				<img src="../assets/icons8-open-box.png" alt="">
				<p class="header-menu-text-smaller-organization-item">Добавить организацию</p>
			</router-link>
			<router-link tag="div" to="/add-freelancer" class="header-menu-text-smaller">
				<p class="header-menu-text-smaller-item">Добавить услуги фрилансера</p>
			</router-link>
			<div class="header-menu-text-smaller">
				<p class="header-menu-text-smaller-item">О Портале</p>
			</div>
		</div>
		<div class="search">
			<input type="text" class="search-input">
			<img src="../assets/search-input.png" alt="">
		</div>
		<div class="search-mobile">
			<div class="burger-menu burger-menu-mobile" @click="menuToggle" :class="styleAfterBurger">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<input type="text" class="search-mobile-input">
			<img src="../assets/search-input.png" alt="">
		</div>
	</div>
</template>

<script>

export default {
 		name: 'header-app',
 		data () {
 			return {

 			}
 		},
 		computed: {
 			isMenuVissible () {
 				return this.$store.getters.isMenuVissible
 			},
 			styleAfterBurger () {
 				if (this.$store.getters.isMenuVissible) {
 					return 'burger-menu-vissible'
 				} else {
 					return 'burger-menu'
 				}
 			},
 			fixedMenu () {
 				if (this.$store.getters.isMenuVissible) {
 					return 'fixed-menu'
 				} else {
 					return false
 				}
 			}
 		},
 		beforeRouteEnter (to, from, next) {
    const answer = window.confirm('Do you really want to leave? you have unsaved changes!')
    if (answer) {
			  next()
    } else {
			  next(false)
    }
  },
 		methods: {
 			menuToggle () {
 				this.$store.commit('activateMenu')
 			}
 		}
}
</script>

<style scoped>

	#header {
		width: 100%;
		background: #6DC055;
		display: flex;
		justify-content: center;
	}
	.header-logo {
		margin-left: -150px;
	}
	.burger-menu {
		background:#fff;
		padding: 15px 20px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		margin-left: 30px;
		margin-right: 15px;
		cursor: pointer;
	}
	.burger-menu span {
		display: block;
		border:2px solid #6DC055;
		width: 45px;
		margin:5px 0px;
		border-radius: 15px;
	}
	.search-mobile {
		width: 65%;
		display: flex;
		border-radius: 10px;
    	border:none;
    	padding: 0px 0px;
    	outline: none;
    	background:#fff;
    	align-items: center;
    	height: 50px;
    	margin:auto 0px;
    	display: none;
	}
	.search-mobile-input {
		width: 100%;
    	border-radius: 10px;
    	border:none;
    	padding: 5px 15px;
    	outline: none;
    	background:transparent;
    	height: 100%;
	}
	.search-mobile img {
		margin: 0px 10px;
		cursor: pointer;
		width: 40px;
	}
	.search {
		width: 65%;
		display: flex;
		border-radius: 10px;
    	border:none;
    	padding: 0px 0px;
    	outline: none;
    	background:#fff;
    	align-items: center;
    	height: 50px;
    	margin:auto 0px;
	}
	.search-input {
		width: 100%;
    	border-radius: 10px;
    	border:none;
    	padding: 5px 15px;
    	outline: none;
    	background:transparent;
    	height: 100%;
	}
	.search img {
		margin: 0px 10px;
		cursor: pointer;
		width: 40px;
	}
	.header-menu {
		background:#fff;
		position: absolute;
		left:7%;
		top:100px;
		z-index: 999;
		padding: 15px 0px;
		width: 350px;
		border-radius: 7px;
	}
	.burger-menu-vissible {
		background:#fff;
		padding: 15px 20px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		margin-left: 30px;
		margin-right: 15px;
		cursor: pointer;
	}
	.burger-menu-vissible span {
		display: block;
		border:2px solid #6DC055;
		width: 45px;
		margin:5px 0px;
		border-radius: 15px;
	}
	.burger-menu-vissible:after {
		position: absolute;
		content: '';
		border: 20px solid transparent;
		border-bottom: 23px solid rgb(255, 255, 255);
		display: block;
		width: 0;
		height: 0;
		margin-top: 41.5px;
		z-index: 9999;
	}
	.header-menu-caption {
		display: flex;
		align-items: flex-start;
		justify-content: space-between;
		padding: 0px 30px;
	}
	.header-menu-caption-div {
		display: flex;
		align-items: space-between;
		cursor: pointer
	}
	.header-menu-caption-text {
		margin: 0px 10px;
	}
	.header-menu-caption-title {
		font-family: PT Sans, sans-serif;
		font-weight: bold;
		font-size: 23px;
		margin: 0;
		line-height: 16px;
		margin-top: 7px;
	}
	.header-menu-caption-smallTitle {
		font-size:13px;
		font-family: PT Sans, sans-serif;
		margin: 0;
		color:#636363;
		letter-spacing: 0px;
	}
	.header-menu-caption-dots span {
		border:4px solid #707070;
		border-radius: 50%;
		margin: 5px 0px;
		display: block;
	}
	.header-menu-caption-2 {
		width: 100%;
		background:#6DC055;
		display: flex;
		align-items: center;
		padding: 5px 0px;
		margin: 15px 0px 0px 0px;
		cursor: pointer;
	}
	.header-menu-caption-2-icon {
		margin: 0px 25px;
	}
	.header-menu-caption-2-title {
		color:#fff;
		font-size: 23px;
		font-family: PT Sans, sans-serif;
		font-weight: bold;
		text-transform: uppercase;
		margin: 0;
		margin-left: 24px;
	}
	.header-menu-text {
		font-size: 23px;
		font-family: PT Sans, sans-serif;
		color:#000000;
		font-weight: bold;
		margin: 15px 0px 15px 88px;
		cursor: pointer;
	}
	.header-menu-text-smaller {
		font-size: 18px;
		font-family: PT Sans, sans-serif;
		color:#636363;
		margin: 15px 0px 15px 88px;
		cursor: pointer;
	}
	.header-menu-text-smaller-firstChild {
		margin-top: 50px;
	}
	.header-menu-text-smaller-organization {
		font-size: 18px;
		font-family: PT Sans, sans-serif;
		color:#636363;
		display: flex;
		align-items: center;
		cursor: pointer;
	}
	.header-menu-text-smaller-organization img {
		margin: 0px 25px;
	}
	.header-menu-text-smaller-organization-item {
		margin: 0px;
		margin-left: 18px;
	}
	.header-menu-caption-2-close {
		display: none;
	}
	@media screen and (max-width: 1100px) {
		.search {
			display: none;
		}
		.header-logo {
			margin-left: 0px;
		}
		.search-mobile {
			display: flex;
			width: 75%;
		}
		.search-mobile .burger-menu {
			height: 100%;
			margin: 0px 10px;
		}
		.burger-menu {
			display: none;
		}
		.burger-menu-mobile {
			display: flex;
			position: relative;
		}
		.search-mobile .burger-menu-mobile:before {
			content:'';
			position: absolute;
			height:70%;
			border-radius: 10px;
			border:1px solid #707070;
			margin: 0;
			right: 0;
			opacity: .51;
		}
		.burger-menu-mobile span {
			margin:4px 0px;
		}
	}
	@media screen and (max-width: 500px) {
		.header-menu {
			background:#fff;
			top:60px;
			left:0;
			z-index: 999;
			padding: 15px 0px;
			width: 100%;
			border-radius: 0px;
			height: 100vh;
		}
		.header-menu-caption-2-close {
			display: block;
			margin: 0px 20px 0px auto;
			color:#000;
			width: 30px;
			padding: 8px;
			background:#fff;
			text-align: center;
			border-radius: 50%;
		}
		.fixed-menu {
			position: fixed;
		}
		.burger-menu-mobile:after {
			display: none;
		}
		#header {
			align-items: center;

			z-index: 999;
			padding: 5px 0px;
		}
		.header-menu-caption-title {
			font-size: 15px;
		}
		.header-menu-caption-smallTitle {
			font-size:9px;
			font-weight: bold;
		}
		.header-menu-caption-dots span {
			border:4px solid #000;
			margin: 5px 0px;
		}
		.header-menu-caption-2 {
			padding: 15px 0px;
		}
		.header-menu-caption-2-title {
			font-size: 12px;
		}
		.header-menu-text {
			font-size: 15px;
		}
		.header-menu-text-smaller {
			font-size: 13px;
		}
		.header-menu-text-smaller-firstChild {
			margin-top: 50px;
		}
		.header-menu-text-smaller-organization {
			font-size: 13px;
		}
		.header-logo img {
			width: 50px;
		}
		.search-mobile {
			height: 35px;
		}
		.search-mobile img {
			width: 25px;
		}
		.search-mobile .burger-menu {
			margin: 0px 0px;
			border-radius: 10px;
		}
		.search-mobile .burger-menu span {
			margin: 3px 0px;
			width: 30px;
			border-width: 1px;
		}
		.burger-menu-vissible span:nth-child(1) {
		  top: 0;
		  transform: rotate(45deg);
		  margin: 0px;
		  transition-duration: .5s;
		  margin-top: -2px;
		}

		.burger-menu-vissible span:nth-child(2) {
		  bottom: 0;
		  transform: rotate(-45deg) !important;
		  margin: 0px;
		  transition-duration: .5s;
		  margin-top: 2px;
		}
}

	.burger-menu {

  transition-duration: .5s;
}

.burger-menu span {
  transition-duration: .5s;
}

/* состояние active при открытом меню  */
.burger-menu-vissible {

}

.burger-menu-vissible span {
  background: none;
  transition-duration: .5s;
}

.burger-menu-vissible span:nth-child(1) {
  top: 0;
  transform: rotate(45deg);
  margin: 0px;
  margin-top: 3px;
  transition-duration: .5s;
}

.burger-menu-vissible span:nth-child(2) {
  bottom: 0;
  transform: rotate(-45deg) !important;
  margin: 0px;
  transition-duration: .5s;
  margin-top: -3px;
}

.burger-menu-vissible span:nth-child(3) {
  display: none;
}

@media screen and (max-width: 500px) {
	.burger-menu-vissible span:nth-child(1) {
 	  margin-top: 1px;
	}

	.burger-menu-vissible span:nth-child(2) {
 	  margin-top: -1px;
	}
}

</style>
