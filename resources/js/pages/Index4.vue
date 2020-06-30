<template>
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch mt-4">
		<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

				<!-- begin:: Content -->
				<div class="kt-content kt-grid__item kt-grid__item--fluid">

					<!--Begin::Dashboard 2-->

					<!--Begin::Section-->
					<div class="row">
							<div class="col-xl-10">
							<!--begin:: Widgets/Blog-->
								<div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
									<firsttopsidebar></firsttopsidebar>
									<div class="kt-portlet__body pl-0 pr-0">
										<div class="kt-current_info__wrapper">
											<div class="d-flex justify-content-between flex-wrap">
												<div class="kt-widget5 kt-action_wrapper left-widget flex-fill rounded-sm">
													<div class="kt-widget5__item">
														<div class="kt-widget5__content package-left-widget">
															<div class="kt-widget5__pic">
																<img class="kt-widget6__img" src="http://test1.playthriftgift.com/rojitora/assets/media/img/pakcage01_icon.png" alt="">
															</div>
															<div class="kt-widget5__section">
																<div class="kt-widget5__normal">
																	荷物情報
																</div>
															</div>
														</div>
													</div>
													<div class="kt-action_info__content kt-widget5 kt-align-center">
														<div class="kt-widget5__content">
															<div class="kt-widget5_section-left">
																<button type="button" v-on:click="luggage_search" class="btn  btn-wide search-btn">検 索</button>
															</div>
														</div>	    
													</div>
													
												
													<div class="kt-action_info__content">
														<div class="package-search d-flex justify-content-around">
															<div class="kt-widget5__content">
																<div class="kt-widget5_section-left">
																		<button type="button" v-on:click="luggage_add" class="btn  btn-wide package-manage-btn">登 錄</button>
																</div>
															</div>
															<div class="kt-widget5__content">
																<div class="kt-widget5_section-left">
																		<button type="button" v-on:click="luggage_edit" class="btn  btn-wide package-manage-btn">修 正・削 除</button>
																</div>
															</div>	
														</div>    
															
													</div>
												</div>
												<div class="kt-widget5 kt-action_wrapper right-widget flex-fill rounded-sm pb-3">
													<div class="kt-widget5__item">
														<div class="kt-widget5__content package-left-widget pb-3">
															<div class="kt-widget5__pic">
																<img class="kt-widget6__img" src="http://test1.playthriftgift.com/rojitora/assets/media/img/truck_icon-2.png" alt="">
															</div>
															<div class="kt-widget5__section">
																<div class="kt-widget5__normal">
																	空車情報
																</div>
															</div>
														</div>
													</div>

													<div class="kt-action_info__content kt-widget5 kt-align-center">
														<div class="kt-widget5__content">
															<div class="kt-widget5_section-right">
																<button type="button" v-on:click="emptytruck_search" class="btn  btn-wide search-btn">検 索</button>
															</div>
														</div>	    
													</div>

													<div class="kt-action_info__content">
														<div class="empty-truck-search d-flex justify-content-around">  
															<div class="kt-widget5__content">
																<div class="kt-widget5_section-right">
																		<button type="button" v-on:click="emptytruck_add" class="btn  btn-wide empty-truck-mange-btn">登 錄</button>
																</div>
															</div>	
															<div class="kt-widget5__content">
																<div class="kt-widget5_section-right">
																		<button type="button" v-on:click="emptytruck_edit" class="btn  btn-wide empty-truck-mange-btn">修 正・削 除</button>
																</div>
															</div>
														</div>              	
													</div>
												</div>
												
											</div>
											<!--end:: Widgets/Notifications-->
										</div>
									</div>
									<div class="kt-portlet__body construct">
										<img alt="construct" src="/media/img/constuct.png" class="kt-construct" />
									</div>
								</div>
								<!--end:: Widgets/Blog-->
							</div>
						<rightsidebar02></rightsidebar02>
					</div>

				</div>

				<!-- end:: Content -->
			</div>
		</div>
	</div>
</template>

<style>
	@import '/css/style_contact.css';
	@import '/css/style_logged-page01.css';
</style>
<script>
import firsttopsidebar from '../components/FirstTopSidebar.vue'
import rightsidebar02 from '../components/RightSidebar02.vue'
export default {
	components: {
        firsttopsidebar,rightsidebar02
	},
	methods: {
		luggage_search() {
			this.$router.push({name: 'index15'})
		},
		luggage_add(){
			this.$router.push({name: 'index14'})
		},
		luggage_edit(){
			this.$router.push({name: 'index13'})
		},
		emptytruck_search(){
			this.$router.push({name: 'index11'})
		},
		emptytruck_add(){
			this.$router.push({name: 'index10'})
		},
		emptytruck_edit(){
			this.$router.push({name: 'index9'})
		}
	}
}
</script>

