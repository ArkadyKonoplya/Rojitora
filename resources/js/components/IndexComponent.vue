<template>
  <div>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--stretch">
      <div class="kt-container kt-body kt-grid kt-grid--ver" id="kt_body">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
          <!-- begin:: Content -->
          <div class="kt-content kt-grid__item kt-grid__item--fluid">
            <!--Begin::Dashboard 2-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-10">
                <!--begin:: Widgets/Blog-->
                <div class="kt-portlet kt-portlet--height-fluid kt-current_info">
                  <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                    <div class="kt-current_info__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 469px; background-image: url(/media/img/cover.png)">
                      <!-- <div class="kt-current_info__title kt-font-light" style="background-color:white; border-radius:50%; width:400px; height:400px">
                                                        Introducing New Feature
                      </div>-->
                    </div>
                  </div>
                  <div class="kt-portlet__body bg-red">
                    <div class="kt-current_info__wrapper">
                      <div class="kt-current_info__text kt-align-center">2019年05月30日（木） 12：19：31 現在</div>
                      <div class="d-flex justify-content-center flex-wrap">
                        <div class="kt-current_info__content kt-widget5 m-2">
                          <div class="kt-widget5__item">
                            <div class="kt-widget5__content">
                              <div class="kt-widget5__pic">
                                <img class="kt-widget7__img" src="/media/img/package_icon.png" alt />
                              </div>
                              <div class="kt-widget5__section">
                                <div class="kt-widget5__normal">荷物情報</div>
                              </div>
                            </div>
                            <div class="kt-widget5__content">
                              <div class="kt-widget5__section">
                                <a href="javascrip:void(0)" class="kt-widget5__amount">508</a>
                              </div>
                            </div>
                            <div class="kt-widget5__content">
                              <div class="kt-widget5__section">
                                <a href="javascrip:void(0)" class="kt-widget5__normal">件</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="kt-current_info__content kt-widget5 m-2">
                          <div class="kt-widget5__item">
                            <div class="kt-widget5__content">
                              <div class="kt-widget5__pic">
                                <img class="kt-widget7__img" src="/media/img/truck_icon_1.png" alt />
                              </div>
                              <div class="kt-widget5__section">
                                <div class="kt-widget5__normal">荷物情報</div>
                              </div>
                            </div>
                            <div class="kt-widget5__content">
                              <div class="kt-widget5__section">
                                <a href="javascrip:void(0)" class="kt-widget5__amount">508</a>
                              </div>
                            </div>
                            <div class="kt-widget5__content">
                              <div class="kt-widget5__section">
                                <a href="javascrip:void(0)" class="kt-widget5__normal">件</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="kt-portlet__body bg-grey">
                    <a href="/ussing" style="text-align:center">
                      <button  class="btn btn-primary first_time_btn">はじめてロジとらをご利用になる方はこちら</button>
                    </a>
                  </div>
                </div>
                <!--end:: Widgets/Blog-->
              </div>
              <rightsidebar01></rightsidebar01>
            </div>
            <!--End::Section-->

            <!--End::Dashboard 2-->
          </div>
          <!-- end:: Content -->
        </div>
      </div>
    </div>

    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--stretch">
      <div class="kt-container kt-title kt-body kt-grid kt-grid--ver" id="kt_body">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
          <div class="kt-current_info__content kt-widget5 m-2 d-flex justify-content-center mt-5">
            <div class="kt-widget5__item mr-10">
              <div class="kt-widget5__content">
                <div class="kt-widget5__section">
                  <div class="kt-widget5__normal" style="color: #396ec2;">本日の</div>
                </div>
              </div>
              <div class="kt-widget5__content">
                <div class="kt-widget5__section">
                  <a href="#" class="kt-widget5__amount1 kt-font-dark" style="font-size: 30px;">荷物情報</a>
                </div>
              </div>
              <div class="kt-widget5__content">
                <div class="kt-widget5__section">
                  <a href="#" class="kt-widget5__normal">
                    <img class="kt-widget7__img" src="/media/img/package_icon1.png" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-blue-for-rojitora row mt-4 bg-img1">
        <div class="kt-container kt-body">
          <div class="kt-portlet bg-transparent-for-rojitora"  style="margin: auto; max-width: 1028px;">
            <div class="kt-portlet__content mt-4 ml-lg-4">
              <div class="kt-portlet__content-label">
                <span class="btn-warning btn btn-sty-search-icon text-light">
                  <i class="fa fa-search"></i> 探しています
                </span>
              </div>
              <div class="col-1 text-right" style="margin-top: -10px">
                <h2 class="kt-font-warning fa fa-caret-down"></h2>
              </div>
            </div>

            <div class="kt-portlet__body">
              <!--begin: Datatable -->
              <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <table  class="table-for-rojitora table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline table-responsive" id="kt_table_1" role="grid">
                      <thead>
                        <tr role="row">
                          <th style="width: 10%">問合番号</th>
                          <th style="width: 8%">担当者</th>
                          <th style="width: 22%">積込日時</th>
                          <th style="width: 20%">積地</th>
                          <th style="width: 22%">荷降日時</th>
                          <th>降地</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">252086</td>
                          <td>黒木</td>
                          <td>
                            05/30
                            <br />午前
                          </td>
                          <td>
                            埼玉県
                            <br />久喜市
                          </td>
                          <td>
                            05/30
                            <br />午後
                          </td>
                          <td>
                            埼玉県
                            <br />所沢市
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table-for-rojitora table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline table-responsive"
                      id="kt_table_1" role="grid" aria-describedby="kt_table_1_info">
                      <thead>
                        <tr role="row">
                          <th style="width: 10%">車輌</th>
                          <th style="width: 12%">種類１</th>
                          <th style="width: 15%">種類２</th>
                          <th style="width: 15%">種類３</th>
                          <th style="width: 15%">荷物</th>
                          <th>備考</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">2t</td>
                          <td>種類１</td>
                          <td>ロング</td>
                          <td>Tieba</td>
                          <td>
                            住宅材
                            <br />kg
                          </td>
                          <td>2ロングワイド平</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--end: Datatable -->
            </div>

            <div class="kt-portlet__head boder_bottom_none_for_rojitora d-flex flex-row-reverse bd-highlight" >
              <div class="kt-portlet__head-label">
                <a href="/luggage_search">
                  <button class="btn-warning btn btn-sty-search-icon text-light kt-font-xl" style="width: 170px;">
                    <i class="fa fa-search"></i>検索する
                  </button>
                </a>
              </div>
            </div>
            <div class="kt-portlet__body mb-4">
              <a href="/register" style="text-align:center">
                <button class="btn btn-primary second_time_btn2 kt-font-xll">
                  会員登録すると、明日以降の全ての情報が閲覧可能!
                  <span class="btn mt-1 mb-2" style="background-color:#fff;color: #396ec2;font-size:23px;padding: initial; min-width: 350px;border-radius: 10px;">
                    無料会員登録はこちら
                    <img class="kt-widget7__img" src="/media/img/point_arrow_icon.png" alt />
                  </span>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--stretch">
      <div class="kt-container kt-title kt-body kt-grid kt-grid--ver" id="kt_body">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
          <div class="kt-current_info__content kt-widget5 m-2 d-flex justify-content-center mt-5">
            <div class="kt-widget5__item mr-10">
              <div class="kt-widget5__content">
                <div class="kt-widget5__section">
                  <div class="kt-widget5__normal" style="color: #396ec2;">
                    <span>本日積込可能な</span>
                    <span class="kt-font-dark ml-n2">空車情報</span>
                  </div>
                </div>
              </div>
              <div class="kt-widget5__content">
                <div class="kt-widget5__section">
                  <a href="#" class="kt-widget5__normal">
                    <img class="kt-widget7__img" src="/media/img/work_container_truck.png" alt />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kt-portlet row mt-4">
        <div class="bg-grey bg-img2">
          <div class="kt-portlet__content" style="margin: auto; max-width: 1028px;">
            <div class="kt-portlet__content boder_bottom_none_for_rojitora mt-4">
              <div class="kt-portlet__content-label ml-4">
                <span class="btn-custom-sty-warning btn btn-sty-search-icon text-light">
                  <i class="fa fa-search"></i> 探しています
                </span>
              </div>
              <div class="col-1 text-right ml-4" style="margin-top: -10px">
                <h2 class="fa fa-caret-down" style="color: #5e21af"></h2>
              </div>
            </div>

            <div class="kt-portlet__body">
              <!--begin: Datatable -->
              <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table-for-rojitora table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline table-responsive"
                      id="kt_table_1" role="grid" aria-describedby="kt_table_1_info">
                      <thead>
                        <tr role="row">
                          <th style="width:10%">問合番号</th>
                          <th style="width:8%">担当者</th>
                          <th>空車日時</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">173632</td>
                          <td>堀内</td>
                          <td>
                            05/31
                            <br/>午前
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table-for-rojitora table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline table-responsive"
                      id="kt_table_1" role="grid" aria-describedby="kt_table_1_info">
                      <thead>
                        <tr role="row">
                          <th style="width:10%">空車地</th>
                          <th style="width:40%">空車地</th>
                          <th style="width:15%">荷降日時</th>
                          <th>降可能地</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">
                            千葉県
                            <br />野田市
                          </td>
                          <td>埼玉県、千葉県、東京都、神奈川県</td>
                          <td>
                            06/03
                            <br />午前
                          </td>
                          <td>茨城県、栃木県、群馬県</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      class="table-for-rojitora table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline table-responsive"
                      id="kt_table_1"
                      role="grid"
                      aria-describedby="kt_table_1_info"
                    >
                      <thead>
                        <tr role="row">
                          <th style="width:10%">車輌</th>
                          <th style="width:12%">種類１</th>
                          <th style="width:15%">種類２</th>
                          <th style="width:18%">種類３</th>
                          <th>備考</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">
                            4t
                            <br />
                          </td>
                          <td>
                            ウイング
                            <br />&nbsp;
                          </td>
                          <td></td>
                          <td>後輪エアサス</td>
                          <td>4tWASPG</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--end: Datatable -->
            </div>

            <div class="kt-portlet__head boder_bottom_none_for_rojitora d-flex flex-row-reverse bd-highlight">
              <div class="kt-portlet__head-label">
                <a href="/luggage_search" class="btn-custom-sty-warning btn btn-sty-search-icon text-light kt-font-xl" style="width: 170px;">
                  <i class="fa fa-search"></i>検索する
                </a>
              </div>
            </div>
            <div class="kt-portlet__body mb-4">
              <a href="/register" style="text-align:center">
                <button class="btn btn-primary second_time_btn">
                  会員登録すると、明日以降の全ての情報が閲覧可能!
                  <span class="btn mt-1 mb-2" style="background-color:#fff;color: #396ec2;font-size:23px;padding: initial; min-width: 350px;border-radius: 10px;">
                    無料会員登録はこちら
                    <img class="kt-widget7__img" src="/media/img/point_arrow_icon.png" alt />
                  </span>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--stretch">
      <div class="kt-container kt-title kt-body kt-grid kt-grid--ver" id="kt_body">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
          <div class="kt-current_info__content kt-widget5 m-2 d-flex justify-content-center mt-5">
            <div class="kt-widget5__item mr-10">
              <div class="kt-widget5__content">
                <div class="kt-widget5__section">
                  <div class="kt-widget5__normal" style="color: #396ec2;">
                    <p style="text-align: center;font-size: 38px;color:#2f9e5b;">サポート体制</p>
                    <ul class="kt-content-sty-widget-font">
                      <li>情報等のご相談はお気軽にしてください。</li>
                      <li>全国規模のネットワークで荷物・空車が見つかります。</li>
                      <li>情報を登録していただければ担当者からご連絡</li>
                      <li>情報を確認し、ご対応できる情報をお知らせ致します。</li>
                      <li>多様な荷物をマッチングし蓄積した経験</li>
                      <li>急な需要にも強力なツールとしてご提供</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center flex-wrap">
        <div class="row">
          <div class="col-xl-6">
            <div class="kt-widget5__item">
              <div class="kt-widget5__content">
                <div class="kt-widget5__pic">
                  <img class="kt-widget7__img" src="/media/img/working-man-image-1.png" alt />
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="kt-widget5__item form_style">
              <div class="kt-widget5__content">
                <div class="kt-widget5__pic">
                  <img class="kt-widget7__img" src="/media/img/working-man-image-2.png" alt />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="kt-container kt-title kt-body kt-grid kt-grid--ver" id="kt_body">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
          <div class="kt-current_info__content kt-widget5 m-2 d-flex justify-content-center mt-5">
            <div class="kt-widget5__item mr-10">
              <div class="kt-widget5__content">
                <div class="kt-widget5__section">
                  <div class="kt-widget5__normal" style="color: #396ec2;">
                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                      <div class="kt-current_info__content kt-widget5 m-2 d-flex justify-content-center mt-5">
                        <div class="kt-widget5__item">
                          <div class="kt-widget5__content">
                            <div class="kt-widget5__section">
                              <a href="#" class="kt-widget5__normal">
                                <img class="kt-widget7__img"  src="/media/img/vector-smart-icon.png" alt/>
                              </a>
                            </div>
                          </div>
                          <div class="kt-widget5__content">
                            <div class="kt-widget5__section">
                              <div class="text-dark kt-font-boldest">
                                <h1>「ロジとら」会員登録のメリット</h1>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="kt-font-lg text-dark mt-3">
                      インターネット上で
                      <b>「荷物情報」「空車情報」</b>を提供しているサイトは多いけど、ロジとらに会員登録する
                    </p>
                    <p class="kt-font-lg text-dark">メリットは何だろう?という疑問にお答えします! 会員登録~情報閲覧~成約に至るまで一切費用は無料です!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kt-container kt-title kt-body kt-grid kt-grid--ver mt-5" id="kt_body">
        <div class="kt-container kt-body">
          <div class="kt-portlet__body">
            <div class="kt-widget5__content">
              <div class="kt-widget5__section">
                <div class="row form_style" style="max-width: 960px; min-height: 380px; margin: auto;">
                  <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--solid-grey kt-portletk-portlet--height-fluid" style="border-radius: 20px 20px">
                      <div class="kt-portlet__content">
                        <div class="kt-portlet__head-label ml-5 mt-4">
                          <div class="form-group row">
                            <label   class="kt-badge kt-badge--square kt-badge--xl"  style="background-color: #e96565; font-weight:bold; font-size:25px; color:#fff;">1</label>
                            <div class="font-weight-bold kt-font-xl ml-4" style="color: #e96565;">
                              全ての情報が
                              <br />閲覧可能!
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="kt-portlet__body">
                        <div class="kt-portlet__content text-center">
                          <img class="kt-widget7__img" src="/media/img/truct_icon_3.png" alt />
                        </div>
                      </div>
                      <div class="kt-portlet__content text-center text-dark kt-font-lg mb-4">
                        全ての情報が閲覧可能（「ロジと
                        <br />ら」内に登録してある全ての荷物
                        <br />・空車情報を閲覧できます。
                      </div>
                    </div>
                    <!--end::Portlet-->
                  </div>
                  <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--solid-grey kt-portletk-portlet--height-fluid" style="border-radius: 20px 20px">
                      <div class="kt-portlet__content">
                        <div class="kt-portlet__head-label ml-5 mt-4">
                          <div class="form-group row">
                            <label class="kt-badge kt-badge--square kt-badge--xl" style="background-color: #e96565; font-weight:bold; font-size:25px; color:#fff;">2</label>
                            <div class="font-weight-bold kt-font-xl ml-3" style="color: #e96565;">
                              お好きな時間に
                              <br />情報登録!
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="kt-portlet__body">
                        <div class="kt-portlet__content text-center">
                          <img class="kt-widget7__img" src="/media/img/favorite_time.png" alt />
                        </div>
                      </div>
                      <div class="kt-portlet__content text-center text-dark kt-font-lg mb-5">
                        24時間好きな時に、荷物情報・空
                        <br />車情報を直接登録ができます。
                      </div>
                    </div>
                    <!--end::Portlet-->
                  </div>
                  <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div  class="kt-portlet kt-portlet--solid-grey kt-portletk-portlet--height-fluid" style="border-radius: 20px 20px">
                      <div class="kt-portlet__content">
                        <div class="kt-portlet__head-label ml-5 mt-4">
                          <div class="form-group row">
                            <label
                              class="kt-badge kt-badge--square kt-badge--xl"
                              style="background-color: #e96565; font-weight:bold; font-size:25px;color:#fff;"
                            >3</label>
                            <div class="font-weight-bold kt-font-xl ml-4" style="color: #e96565;">
                              優先的に
                              <br />配車いたします!
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="kt-portlet__body">
                        <div class="kt-portlet__content text-center">
                          <img class="kt-widget7__img" src="/media/img/distribut.png" alt />
                        </div>
                      </div>
                      <div class="kt-portlet__content text-center text-dark kt-font-lg mb-4">
                        直接登録していただいた情報を
                        <br />「ロジとら」専門の配車担当がマ
                        <br />ッチング致します。
                      </div>
                    </div>
                    <!--end::Portlet-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kt-container kt-title kt-body kt-grid kt-grid--ver mt-5" id="kt_body">
        <div class="kt-container kt-body">
          <div class="kt-portlet__body">
            <div class="kt-widget5__content">
              <div class="kt-widget5__section">
                <div class="kt-widget5__header text-center">
                  <img class="kt-widget7__img" src="/media/img/support.png" />
                </div>
                <h1 class="text-dark kt-font-boldest text-center mt-3">安心のサポート体制</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--stretch">
        <div
          class="kt-container kt-body kt-grid kt-grid--ver d-flex justify-content-center"
          id="kt_body"
        >
          <div class="kt-header__brand kt-grid__item">
            <div class="kt-header__brand-logo">
              <div
                class="kt-widget27__content text-center text-light"
                style="min-height: 121px; border-radius: 5px 5px; background-color: #e96565;"
              >
                <div class="kt-font-xl mt-5 ml-5 mr-5 kt-font-boldest">お困りの情報はお気軽にご相談ください!</div>
                <div class="kt-font-lg ml-5 mr-5 mb-4">配車担当が適切な輸送をご提案いたします。</div>
              </div>
            </div>
            <i class="kt-font-xl fa fa-caret-right" style="color:#e96565;"></i>
            <img class="kt-widget7__img mt-2 ml-5" src="/media/img/contact_us.png" />
          </div>
        </div>
        <div
          class="kt-container kt-body kt-grid kt-grid--ver d-flex justify-content-center mt-3 pl-5"
          id="kt_body"
        >
          <div class="kt-header__brand kt-grid__item ml-5">
            <img class="kt-widget7__img mt-2 ml-5" src="/media/img/boast_information.png" alt />
            <div class="kt-header__brand-logo ml-5">
              <i class="kt-font-warning kt-font-xl fa fa-caret-left text-center mb-3 pb-5"></i>
              <div
                class="kt-widget27__content kt-bg-warning text-center text-dark"
                style="min-height: 121px; border-radius: 5px 5px;"
              >
                <div class="kt-font-xl mt-5 ml-5 mr-5 kt-font-boldest">全国ネットワークで自慢の情報量!</div>
                <div class="kt-font-lg ml-5 mr-5 mb-4">近場遠方問わず、お探しの荷物・空車が見つかります。</div>
              </div>
            </div>
          </div>
        </div>
        <div class="kt-container kt-body kt-grid kt-grid--ver d-flex justify-content-center mt-4" id="kt_body">
          <div class="kt-header__brand kt-grid__item">
            <div class="kt-header__brand-logo">
              <div class="kt-widget27__content kt-bg-info text-center text-light" style="min-height: 130px; border-radius: 5px 5px">
                <div class="kt-font-xl mt-5 ml-5 mr-5 kt-font-boldest">情報を登録していただくと担当からお電話!</div>
                <div class="kt-font-lg ml-5 mr-5 mb-4">詳細を確認し、対応できる情報をお知らせいたします。</div>
              </div>
            </div>
            <i class="kt-font-info kt-font-xl fa fa-caret-right"></i>
            <img class="kt-widget7__img mt-2 ml-5" src="/media/img/call_person.png" alt />
          </div>
        </div>
      </div>
    </div>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--stretch">
      <div class="bg-blue-for-rojitora row mt-4">
        <div class="kt-container kt-body">
          <div class="kt-portlet kt-portlet--mobile bg-blue-for-rojitora" style="margin: auto; max-width: 1028px;">
            <div class="kt-portlet__body mb-4">
              <a href="/register" style="text-align:center">
                <button class="btn btn-primary second_time_btn2 kt-font-xll">
                  会員登録すると、明日以降の全ての情報が閲覧可能!
                  <span class="btn mt-1 mb-2" style="background-color:#fff;color: #396ec2;font-size:23px;padding: initial; min-width: 350px;border-radius: 10px;">
                    無料会員登録はこちら
                    <img class="kt-widget7__img" src="/media/img/point_arrow_icon.png" alt />
                  </span>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--stretch bg-warning">
      <div class="kt-container kt-body kt-grid kt-grid--ver d-flex justify-content-center mt-5">
        <div class="kt-portlet__body">
          <div class="kt-current_info__wrapper">
            <h2 class="kt-current_info__text kt-align-center text-light kt-font-bold mb-4">よくある質問</h2>
            <div class="d-flex justify-content-center flex-wrap m-4">
              <div class="kt-current_info__content kt-widget5">
                <div class="kt-widget5__item" style="background-color: #d29400; border-radius: 10px 10px">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__section">
                      <div class="kt-font-lg text-light m-4">
                        <span class="fa fa-check-circle kt-font-xl kt-font-info"></span>
                        「ロジとら」は無料で使用できますか。(会員登録〜情報
                        <br />&nbsp; &nbsp; &nbsp; 閲覧まで無料でご利用できます)
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="kt-current_info__content kt-widget5 ml-4">
                <div class="kt-widget5__item" style="background-color: #d29400; border-radius: 10px 10px">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__section">
                      <div class="kt-font-lg text-light m-4">
                        <span class="fa fa-check-circle kt-font-xl kt-font-info"></span>
                        どういった情報が載ってますか（全国各地の”ロジとら”
                        <br />&nbsp; &nbsp; &nbsp; に集まる全ての情報を掲載してます
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center flex-wrap">
              <div class="kt-current_info__content kt-widget5">
                <div class="kt-widget5__item" style="background-color: #d29400; border-radius: 10px 10px">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__section">
                      <div class="kt-font-lg text-light mt-4 mb-4 ml-4">
                        <span class="fa fa-check-circle kt-font-xl kt-font-info"></span>
                        「ロジとら」でなにができるの（お目当ての積地・降地を選
                        <br />&nbsp; &nbsp; &nbsp; 択し荷物・空車情報が検索できます
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="kt-current_info__content kt-widget5 ml-4">
                <div class="kt-widget5__item" style="background-color: #d29400; border-radius: 10px 10px">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__section">
                      <div class="kt-font-lg text-light m-4">
                        <span class="fa fa-check-circle kt-font-xl kt-font-info"></span>
                        目当ての情報があったらどうするの（問い合わせ番号と
                        <br />&nbsp; &nbsp; &nbsp; 担当者名をお電話にてお伝えください。
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="kt-portlet__head bd-highlight text-center m-5">
              <div class="kt-portlet__head-label">
                <a href="//question_answer" style="text-align: center">
                  <button class="btn-custom-sty-warning btn btn-sty-search-icon">
                    <span class="text-light kt-font-bold kt-font-xl m-4">詳しくはこちら</span>
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--stretch">
      <div class="bg-green-for-rojitora row">
        <div class="kt-container kt-body">
          <div class="kt-portlet kt-portlet--mobile bg-green-for-rojitora" style="margin: auto; max-width: 1028px;">
            <div class="kt-portlet__body mb-4">
              <a href="/register" style="text-align:center">
                <button class="btn btn-primary second_time_btn">
                  会員登録すると、明日以降の全ての情報が閲覧可能!
                  <span class="btn mt-1 mb-2" style="background-color:#fff;color: #396ec2;font-size:23px;padding: initial; min-width: 350px;border-radius: 10px;" >
                    無料会員登録はこちら
                    <img class="kt-widget7__img" src="/media/img/point_arrow_icon.png" />
                  </span>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
	@import '/css/style_r.bundle.css';
  
</style>
<script>
import rightsidebar01 from '../components/RightSidebar01.vue'
export default {
  data() {
    return {
     
    }
  },
  components: {
    rightsidebar01
  },
  methods: {
    
    register: function() {
      console.log("register");
      this.$router.push({ name: 'index6' });
    },
    forget_pwd: function(){
      this.$router.push({name: 'index5'});
    },
    using: function(){
      this.$router.push({name: 'index2'});
    }
  }
}
</script>
