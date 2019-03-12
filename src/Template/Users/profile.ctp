<!DOCTYPE html>

    <title><?= $this->request->getSession()->read('Auth.User.username') ?></title>

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <?= $this->Html->css('/template/assets/css/users/user-profile.css') ?>
    <!--  END CUSTOM STYLE FILE  -->




<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN TOPBAR  -->
    <div class="topbar-nav header navbar fixed-top" role="banner">
        <div id="dismiss" class="d-lg-none text-right"><i class="flaticon-cancel-12 mr-3"></i></div>
        <nav id="topbar">
            <ul class="list-unstyled menu-categories d-lg-flex justify-content-lg-around mb-0" id="topAccordion">
                <li class="menu">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-computer-6"></i>
                            <span>Dashboard</span>
                        </div>

                        <div>
                            <i class="flaticon-down-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                        <li>
                            <a href="#dashboards" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ADMIN <i class="flaticon-dot-three"></i> </a>
                            <ul class="collapse list-unstyled sub-submenu show" id="dashboards">
                                <li>
                                    <a href="index.html"> Default </a>
                                </li>
                                <li>
                                    <a href="ecommerce_dashboard.html"> Ecommerce </a>
                                </li>
                                <li>
                                    <a href="accounting_dashboard.html"> Accounting </a>
                                </li>
                                <li>
                                    <a href="analytics_dashboard.html"> Analytics </a>
                                </li>
                                <li>
                                    <a href="car_dashboard.html"> Car </a>
                                </li>
                                <li>
                                    <a href="classic_dashboard.html"> Classic </a>
                                </li>
                                <li>
                                    <a href="stock_market_dashboard.html"> Stock Market </a>
                                </li>
                                <li>
                                    <a href="cryptocurrency_dashboard.html">Cryptocurrency </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#uiAndComponents" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-3d-cube"></i>
                            <span>UI & Components</span>
                        </div>
                        <div>
                            <i class="flaticon-down-arrow"></i>
                        </div>
                    </a>
                    <div class="collapse submenu list-unstyled" id="uiAndComponents" data-parent="#topAccordion">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#ui-features" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> UI KIT <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="ui-features">
                                            <li>
                                                <a href="ui_helper_classes.html"> Helper Classes </a>
                                            </li>
                                            <li>
                                                <a href="ui_color_library.html"> Color Library </a>
                                            </li>
                                            <li>
                                                <a href="ui_grid.html"> Grid System </a>
                                            </li>
                                            <li>
                                                <a href="ui_typography.html"> Typography </a>
                                            </li>
                                            <li>
                                                <a href="ui_shadows.html"> Shadow </a>
                                            </li>
                                            <li>
                                                <a href="ui_miscellaneous.html"> Miscellaneous </a>
                                            </li>
                                            <li>
                                                <a href="ui_pagination.html">Pagination</a>
                                            </li>
                                            <li>
                                                <a href="ui_alert.html"> Alerts </a>
                                            </li>
                                            <li>
                                                <a href="ui_tooltips_and_popovers.html"> Tooltips And Popovers </a>
                                            </li>
                                            <li>
                                                <a href="ui_loader.html"> Loaders </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#ui-buttons" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Buttons <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="ui-buttons" data-parent="#ui-features">
                                                    <li>
                                                        <a href="ui_buttons.html"> Bootstrap </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_creative.html"> Creative </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_switches.html"> Switches </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_social_button.html"> Social </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="ui_sweetalert.html"> Sweet Alerts </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#ui-font-icons" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Font Icons <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="ui-font-icons" data-parent="#ui-features">
                                                    <li>
                                                        <a href="ui_flaticon_icon.html"> Flaticon </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_linea_icon.html"> Linea </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_themify_icon.html"> Themify </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_pixeden_icon.html"> Pixeden </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_fontawesome_icon.html"> Fontawesome </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_metro_icon.html"> Metro </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_weather_icon.html"> Weather </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="ui_tabs.html"> Tabs </a>
                                            </li>
                                            <li>
                                                <a href="ui_accordion.html"> Accordions  </a>
                                            </li>
                                            <li>
                                                <a href="ui_modal.html"> Modals </a>
                                            </li>
                                            <li>
                                                <a href="ui_sliders.html"> Range Sliders </a>
                                            </li>
                                            <li>
                                                <a href="ui_timeline.html"> Timeline </a>
                                            </li>
                                            <li>
                                                <a href="ui_tree.html"> Tree View </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#ui-progress" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Progress Bar <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="ui-progress" data-parent="#ui-features">
                                                    <li>
                                                        <a href="ui_bootstrap_progress_bar.html"> Bootstrap </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_material_progress_bar.html"> Custom </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#ui-notification" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Notifications <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="ui-notification" data-parent="#ui-features">
                                                    <li>
                                                        <a href="ui_toastr.html"> Toastr </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_notification.html"> Creative </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui_snackbar.html"> Snackbar </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="ui_session_timeout.html"> Session Timeout </a>
                                            </li>
                                            <li>
                                                <a href="ui_media_object.html"> Media Object </a>
                                            </li>
                                            <li>
                                                <a href="ui_list_group.html"> List Group </a>
                                            </li>
                                            <li>
                                                <a href="ui_nestable_list.html"> Nested List </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#components" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> COMPONENTS <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="components">
                                            <li>
                                                <a href="component_portlet.html"> Portlets </a>
                                            </li>
                                            <li>
                                                <a href="component_keypad.html"> Keypad </a>
                                            </li>

                                            <li class="sub-sub-submenu-list">
                                                <a href="#component-carousel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Carousel <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="component-carousel" data-parent="#components">
                                                    <li>
                                                        <a href="component_bootstrap_carousel.html">Bootstrap</a>
                                                    </li>
                                                    <li>
                                                        <a href="component_carousel.html">Metro</a>
                                                    </li>
                                                    <li>
                                                        <a href="component_sliders.html">Swiper</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="component_rating.html"> Rating </a>
                                            </li>
                                            <li>
                                                <a href="component_blockui.html"> Block UI </a>
                                            </li>
                                            <li>
                                                <a href="component_popup.html"> Popup </a>
                                            </li>
                                            <li>
                                                <a href="component_scroll_bars_basic.html"> Scrollbar </a>
                                            </li>
                                            <li>
                                                <a href="component_todo_list.html"> Todo List </a>
                                            </li>
                                            <li>
                                                <a href="component_scrollspy.html"> Scrollspy </a>
                                            </li>
                                            <li>
                                                <a href="component_countdown.html"> Countdown </a>
                                            </li>

                                            <li>
                                                <a href="component_counter.html"> Counter </a>
                                            </li>
                                            <li>
                                                <a href="component_datetime_picker.html"> Date &amp; Time Picker </a>
                                            </li>
                                            <li>
                                                <a href="component_lightbox.html"> LightBox </a>
                                            </li>
                                            <li>
                                                <a href="component_color_picker.html"> Color Picker </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#component-media" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Media <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="component-media" data-parent="#components">
                                                    <li>
                                                        <a href="component_video_player.html"> Video Player </a>
                                                    </li>
                                                    <li>
                                                        <a href="component_audio_player.html"> Audio Player </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="component_clipboard.html"> Clipboard </a>
                                            </li>
                                            <li>
                                                <a href="component_typeahead.html"> Typeahead </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#component-search" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Search <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu show" id="component-search" data-parent="#components">
                                                    <li>
                                                        <a href="component_search_multiple.html"> Multiple </a>
                                                    </li>
                                                    <li>
                                                        <a href="component_search_web.html"> Web </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#component-animation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Animations <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="component-animation" data-parent="#components">
                                                    <li>
                                                        <a href="component_animation_buttons.html"> Buttons </a>
                                                    </li>
                                                    <li>
                                                        <a href="component_animation_css.html"> CSS </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#component-img-crop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Image Cropping <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="component-img-crop" data-parent="#components">
                                                    <li>
                                                        <a href="component_image_cropping_basic.html"> Basic </a>
                                                    </li>
                                                    <li>
                                                        <a href="component_image_cropping_advanced.html"> Advanced </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#element" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ELEMENTS <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="element">
                                            <li>
                                                <a href="element_steps.html"> Steps </a>
                                            </li>
                                            <li>
                                                <a href="element_list.html"> List </a>
                                            </li>
                                            <li>
                                                <a href="element_ribbon.html"> Ribbons </a>
                                            </li>
                                            <li>
                                                <a href="element_overlays.html"> Overlays </a>
                                            </li>
                                            <li>
                                                <a href="element_weatherapp.html"> Weather Apps </a>
                                            </li>
                                            <li>
                                                <a href="element_testimonial.html"> Testimonials </a>
                                            </li>
                                            <li>
                                                <a href="element_team.html"> Team </a>
                                            </li>
                                            <li>
                                                <a href="element_contacts.html"> Contacts </a>
                                            </li>
                                            <li>
                                                <a href="element_blog.html"> Blog Elements </a>
                                            </li>
                                            <li>
                                                <a href="element_pricing_table.html"> Pricing Tables </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="menu">
                    <a href="#tables-forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-table"></i>
                            <span>Tables & Forms</span>
                        </div>
                        <div>
                            <i class="flaticon-down-arrow"></i>
                        </div>
                    </a>
                    <div class="collapse submenu list-unstyled" id="tables-forms"  data-parent="#topAccordion">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#tables" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> TABLES <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="tables">
                                            <li>
                                                <a href="table_basic.html"> Basic </a>
                                            </li>
                                            <li>
                                                <a href="table_tablesaw.html"> Tablesaw</a>
                                            </li>
                                            <li>
                                                <a href="table_sticky_table_header.html"> Sticky Headers</a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#tables-editable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Editable <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="tables-editable" data-parent="#tables">
                                                    <li>
                                                        <a href="table_jq_spreadsheet.html"> Spreadsheet </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_jquery_tabledit.html"> TableEdit </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_editablegrid.html"> Editable Grid </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#tables-data-tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="tables-data-tables" data-parent="#tables">
                                                    <li>
                                                        <a href="table_dt_zero_configuration.html"> Basic </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_alternative_pagination.html"> Alternative Pagination</a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_custom.html"> Custom </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_scrollable.html"> Scrollable </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_range_search.html"> Range Search </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_html5.html"> HTML5 Export </a>
                                                    </li>
                                                    <li>
                                                        <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#forms" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> FORM <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="forms">
                                            <li class="sub-sub-submenu-list">
                                                <a href="#forms-bootstrap" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Bootstrap <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="forms-bootstrap" data-parent="#forms">
                                                    <li>
                                                        <a href="form_bootstrap_basic.html"> Basic </a>
                                                    </li>
                                                    <li>
                                                        <a href="form_bootstrap_rounded.html"> Rounded </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#forms-input-group" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Input Group <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="forms-input-group" data-parent="#forms">
                                                    <li>
                                                        <a href="form_input_group_basic.html"> Basic </a>
                                                    </li>
                                                    <li>
                                                        <a href="form_input_group_rounded.html"> Rounded </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="form_bootstrap_material.html"> Material </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#forms-layout" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Layouts <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="forms-layout" data-parent="#forms">
                                                    <li>
                                                        <a href="form_layouts.html"> Basic </a>
                                                    </li>
                                                    <li>
                                                        <a href="form_layouts_rounded.html"> Rounded </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#forms-validation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Validation <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="forms-validation" data-parent="#forms">
                                                    <li>
                                                        <a href="form_validation.html"> Bootstrap </a>
                                                    </li>
                                                    <li>
                                                        <a href="form_jqvalidation.html"> jQuery </a>
                                                    </li>
                                                    <li>
                                                        <a href="form_validation_material.html"> Custom </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="form_input_mask.html"> Input Mask </a>
                                            </li>
                                            <li>
                                                <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                                            </li>
                                            <li>
                                                <a href="form_select2.html"> Select2 </a>
                                            </li>
                                            <li>
                                                <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                                            </li>
                                            <li>
                                                <a href="form_multiselect.html"> Multi Select </a>
                                            </li>
                                            <li>
                                                <a href="form_maxlength.html"> Maxlength </a>
                                            </li>
                                            <li>
                                                <a href="form_repeater.html"> Repeater </a>
                                            </li>
                                            <li>
                                                <a href="form_checkbox_radio.html"> Checkbox and Radio </a>
                                            </li>

                                            <li class="sub-sub-submenu-list">
                                                <a href="#forms-wizard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Wizards <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="forms-wizard" data-parent="#forms">
                                                    <li>
                                                        <a href="form_bs_wizard.html"> Bootstrap </a>
                                                    </li>
                                                    <li>
                                                        <a href="form_wizard.html"> jQuery Steps </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="form_fileupload.html"> File Upload </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#editors" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> EDITORS <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="editors">
                                            <li>
                                                <a href="editor_tinymce.html"> Tinymce </a>
                                            </li>
                                            <li>
                                                <a href="editor_quill.html"> Quill </a>
                                            </li>
                                            <li>
                                                <a href="editor_markdown.html"> Markdown </a>
                                            </li>
                                            <li>
                                                <a href="editor_contenttools.html"> ContentTools </a>
                                            </li>
                                            <li>
                                                <a href="editor_summernote.html"> Summernote </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="menu">
                    <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-copy"></i>
                            <span>Pages</span>
                        </div>
                        <div>
                            <i class="flaticon-down-arrow"></i>
                        </div>
                    </a>
                    <div class="collapse submenu list-unstyled" id="pages" data-parent="#topAccordion">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ECOMMERCE <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="ecommerce">
                                            <li>
                                                <a href="ecommerce_orders.html"> Orders </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_product.html"> Products </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_product_catalog.html"> Product Catalog </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#product-details" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"  data-parent="#ecommerce"> Product Details <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="product-details">
                                                    <li>
                                                        <a href="ecommerce_product_details_1.html"> Product Details 1 </a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce_product_details_2.html"> Product Details 2 </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="ecommerce_addedit_product.html"> Add/Edit Products </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_addedit_categories.html"> Add/Edit Categories </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_view_cart.html"> View Cart </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_view_payments.html"> View Payments </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_view_customers.html"> View Customers </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_checkout.html"> Checkout </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_invoices.html"> Invoice </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_shipments.html"> Shipments </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_products_cart.html"> Products in Cart </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_coupons.html"> Coupons </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_low_stock.html"> Low Stock </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_best_sellers.html"> Best Sellers </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_refunds.html"> Refunds </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_search_terms.html"> Search Terms </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_newsletters.html"> Newsletters </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_wizards.html"> Payment Wizard </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce_reviews.html"> Reviews </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#page" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> PAGES <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="page">
                                            <li>
                                                <a href="pages_blank_page.html"> Blank Page</a>
                                            </li>
                                            <li>
                                                <a href="pages_helpdesk.html"> Helpdesk </a>
                                            </li>
                                            <li>
                                                <a href="pages_contact_us.html"> Contact Form </a>
                                            </li>
                                            <li>
                                                <a href="pages_faq.html"> FAQ </a>
                                            </li>
                                            <li>
                                                <a href="pages_blog.html"> Blog </a>
                                            </li>
                                            <li>
                                                <a href="pages_privacy.html"> Privacy Policy </a>
                                            </li>
                                            <li>
                                                <a href="pages_cookie_consent.html"> Cookie Consent </a>
                                            </li>
                                            <li>
                                                <a href="pages_landing_page.html" target="_blank"> Landing Page </a>
                                            </li>
                                            <li>
                                                <a href="pages_coming_soon.html"> Coming Soon </a>
                                            </li>

                                            <li class="sub-sub-submenu-list">
                                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages">
                                                    <li>
                                                        <a href="pages_error404.html"> 404 1 </a>
                                                    </li>
                                                    <li>
                                                        <a href="pages_error404-2.html"> 404 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="pages_error500.html"> 500 1 </a>
                                                    </li>
                                                    <li>
                                                        <a href="pages_error500-2.html"> 500 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="pages_error503.html"> 503 1 </a>
                                                    </li>
                                                    <li>
                                                        <a href="pages_error503-2.html"> 503 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="pages_maintenence.html"> Maintanence </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#users" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> USERS <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="users">
                                            <li class="active">
                                                <a href="user_profile.html"> Profile </a>
                                            </li>
                                            <li>
                                                <a href="user_account_setting.html"> Account Settings </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#users">
                                                    <li>
                                                        <a href="user_login_1.html"> Login 1 </a>
                                                    </li>
                                                    <li>
                                                        <a href="user_login_2.html"> Login 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="user_login_3.html"> Login 3 </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#users">
                                                    <li>
                                                        <a href="user_register_1.html"> Register 1 </a>
                                                    </li>
                                                    <li>
                                                        <a href="user_register_2.html"> Register 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="user_register_3.html"> Register 3 </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#users">
                                                    <li>
                                                        <a href="user_pass_recovery_1.html"> Password Recovery 1 </a>
                                                    </li>
                                                    <li>
                                                        <a href="user_pass_recovery_2.html"> Password Recovery 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="user_pass_recovery_3.html"> Password Recovery 3 </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#users">
                                                    <li>
                                                        <a href="user_lockscreen_1.html"> Lockscreen 1 </a>
                                                    </li>
                                                    <li>
                                                        <a href="user_lockscreen_2.html"> Lockscreen 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="user_lockscreen_3.html"> Lockscreen 3 </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="menu">
                    <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-plus"></i>
                            <span class="d-lg-none">More</span>
                        </div>
                        <div class="d-lg-none">
                            <i class="flaticon-down-arrow"></i>
                        </div>
                    </a>
                    <div class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                        <div class="row">
                            <div class="col-lg-3">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#modules" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> MODULES <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="modules">
                                            <li>
                                                <a href="modules_widgets.html"> Widgets </a>
                                            </li>
                                            <li>
                                                <a href="modules_table_and_event.html"> Tables &amp; Events </a>
                                            </li>
                                            <li>
                                                <a href="modules_charts_and_maps.html"> Charts &amp; Maps </a>
                                            </li>
                                            <li>
                                                <a href="modules_weather_and_calendar.html"> Weather &amp; Calendar </a>
                                            </li>
                                            <li>
                                                <a href="modules_cards.html"> Cards </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#dragndrop" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> DRAG AND DROP <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="dragndrop">
                                            <li>
                                                <a href="dragndrop_gridstack.html"> Grid Stack</a>
                                            </li>
                                            <li>
                                                <a href="dragndrop_dragula.html"> Dragula</a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#dragndrop-jqueryui" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jQuery UI <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="dragndrop-jqueryui" data-parent="#dragndrop">
                                                    <li>
                                                        <a href="dragndrop_ui_product_cart.html"> Shopping Cart </a>
                                                    </li>
                                                    <li>
                                                        <a href="dragndrop_scrumboard.html"> Scrum Task Board</a>
                                                    </li>
                                                    <li>
                                                        <a href="dragndrop_scroll_bars.html"> Scrollbar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#charts" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> CHARTS <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="charts">
                                            <li class="sub-sub-submenu-list">
                                                <a href="#chart-amcharts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> amCharts <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="chart-amcharts" data-parent="#charts">
                                                    <li>
                                                        <a href="am_column_and_barchart.html"> Column &amp; Bar </a>
                                                    </li>
                                                    <li>
                                                        <a href="am_line_and_areachart.html"> Line &amp; Area </a>
                                                    </li>
                                                    <li>
                                                        <a href="am_pie_and_donutchart.html"> Pie &amp; Donut </a>
                                                    </li>
                                                    <li>
                                                        <a href="am_gauge_and_otherchart.html"> Gauges  &amp; Other </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#chart-c3chart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> C3 <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="chart-c3chart" data-parent="#charts">
                                                    <li>
                                                        <a href="charts_c3_chart.html"> Simple</a>
                                                    </li>
                                                    <li>
                                                        <a href="charts_c3_api.html"> Api </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="charts_cssplot.html"> CSS Plot </a>
                                            </li>
                                            <li>
                                                <a href="charts_morris.html"> Morris </a>
                                            </li>
                                            <li>
                                                <a href="charts_flowchart.html"> Flowcharts </a>
                                            </li>
                                            <li>
                                                <a href="charts_jQuery_sparklines.html"> jQuery Sparklines </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#chart-echart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> eCharts <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="chart-echart" data-parent="#charts">
                                                    <li>
                                                        <a href="charts_echart_basic.html"> Basic </a>
                                                    </li>
                                                    <li>
                                                        <a href="charts_echart_candlestick.html"> Candlestick </a>
                                                    </li>
                                                    <li>
                                                        <a href="charts_echart_funnel_radar.html"> Funnel & Radar  </a>
                                                    </li>
                                                    <li>
                                                        <a href="charts_echart_scatters.html"> Scatter </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#chart-chartist" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Chartist <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="chart-chartist" data-parent="#charts">
                                                    <li>
                                                        <a href="charts_chartist_bar.html"> Bar </a>
                                                    </li>
                                                    <li>
                                                        <a href="charts_chartist_line.html"> Line &amp; Area </a>
                                                    </li>
                                                    <li>
                                                        <a href="charts_chartist_pie.html"> Pie </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="charts_google.html"> Google </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#maps" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> MAPS <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="maps">
                                            <li class="sub-sub-submenu-list">
                                                <a href="#map-googleMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Google <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="map-googleMaps" data-parent="#maps">
                                                    <li>
                                                        <a href="map_google_basic.html"> Basic </a>
                                                    </li>
                                                    <li>
                                                        <a href="map_google_event.html"> Event </a>
                                                    </li>
                                                    <li>
                                                        <a href="map_google_controls_interaction.html"> Controls and Interaction </a>
                                                    </li>
                                                    <li>
                                                        <a href="map_google_styles.html"> Styles </a>
                                                    </li>
                                                    <li>
                                                        <a href="map_google_other.html"> Other </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#map-jqMapael" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jquery Mapael <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="map-jqMapael" data-parent="#maps">
                                                    <li>
                                                        <a href="map_jquerymapael_basic.html"> Basic </a>
                                                    </li>
                                                    <li>
                                                        <a href="map_jquerymapael_advanced.html"> Advanced </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="map_jhere.html"> jhere </a>
                                            </li>
                                            <li>
                                                <a href="map_open_layers.html"> OpenLayers </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#map-vMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Vector Maps <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="map-vMaps" data-parent="#maps">
                                                    <li>
                                                        <a href="map_amvector.html"> amVector</a>
                                                    </li>
                                                    <li>
                                                        <a href="map_jvector.html"> jVector</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#apps" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> APPS <i class="flaticon-dot-three"></i> </a>
                                        <ul class="collapse list-unstyled sub-submenu show" id="apps">
                                            <li>
                                                <a href="apps_chat.html"> Chat </a>
                                            </li>
                                            <li>
                                                <a href="apps_mailbox.html"> Mailbox </a>
                                            </li>
                                            <li>
                                                <a href="apps_mailbox_with_chat.html"> Mailbox With Chat </a>
                                            </li>
                                            <li>
                                                <a href="apps_newsletter.html"> Newsletter </a>
                                            </li>
                                            <li>
                                                <a href="apps_scheduler.html"> Scheduler </a>
                                            </li>
                                            <li class="sub-sub-submenu-list">
                                                <a href="#apps-calendars" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Calendar <i class="flaticon-right-arrow"></i> </a>
                                                <ul class="collapse list-unstyled sub-submenu" id="apps-calendars" data-parent="#apps-calendars">
                                                    <li>
                                                        <a href="apps_basic_calendar.html"> Basic </a>
                                                    </li>
                                                    <li>
                                                        <a href="apps_full_calendar.html"> Full Calendar </a>
                                                    </li>
                                                    <li>
                                                        <a href="apps_drag_n_drop_calendar.html"> Drag n Drop </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </nav>
    </div>
    <!--  END TOPBAR  -->

    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Profile</h3>
                </div>
            </div>

            <div class="row layout-spacing">

                <!-- Profile Header -->
                <div class="col-sm-12">
                    <div id="profile-header" class="">
                        <div class="row">
                            <div class=" profile-section col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="media ml-sm-5 ml-1">
                                            <img class="mr-sm-3 mr-2 usr-img" src="assets/img/200x200.jpg" alt="usr-img">
                                            <div class="media-body">
                                                <h5 class="usr-name">Shaun Park</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="social-contacts">
                                            <ul class="list-inline justify-content-around d-flex">
                                                <li class="list-inline-item">
                                                    <span class="s-m-name">Tweets</span>
                                                    <span class="s-m-count">15.1K</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="s-m-name">Following</span>
                                                    <span class="s-m-count">902</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="s-m-name">Followers</span>
                                                    <span class="s-m-count">787</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Profile Header -->

                <!-- Nav Tabs -->
                <div class="col-sm-12">
                    <div class="nav-tab-section">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-4 col-12 ml-auto usr-loc-join text-sm-left text-center">
                                <h4>Los Angeles, CA</h4>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-7 col-sm-8 col-12">
                                <ul class="nav nav-pills justify-content-xl-end justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center mt-2" id="pills-tab1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-selected="true">Timeline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-selected="false">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-picture-tab" data-toggle="pill" href="#pills-picture" role="tab" aria-selected="false">Pictures</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-friend-tab" data-toggle="pill" href="#pills-friend" role="tab" aria-selected="false">Friends</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="dropdown custom-dropdown-icon mt-2">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon-dot-three"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="flaticon-menu-dot-fill"></i> Profile</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="flaticon-bell-14"></i> Notification</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="flaticon-settings-7"></i> Settings</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Nav Tabs -->

                <!-- Content -->
                <div class="col-sm-12 mt-5">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="search-section mb-4">
                                <div class="card" style="">
                                    <div class="card-body p-0">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info-section mb-4">
                                <div class="card" style="">
                                    <div class="card-body">
                                        <h4 class="mb-4"><i class="flaticon-user-plus"></i> Profile info</h4>
                                        <p class="mb-3"><span class="usr-work-position">Project Manager </span> at <a href="">DesignReset</a></p>
                                        <p class="mb-4"><span class="usr-work-position">3D Artist and Animator</span> at <a href="">Concept Agency</a></p>
                                        <p>Lives in Los Angeles, CA</p>
                                        <p>Joined March 2014</p>
                                        <p>Followed by 256 people</p>
                                        <p>Joined 17 Groups</p>
                                        <div class="social-networks-section mt-5">
                                            <h4 class="mb-4">Other Networks</h4>
                                            <div class="row">
                                                <div class="col-sm-12 text-center">
                                                    <div class="btn btn-outline-primary btn-rounded mb-4 mr-2">Facebook</div>
                                                    <div class="btn btn-outline-success btn-rounded mb-4 mr-2">Line</div>
                                                    <div class="btn btn-outline-warning btn-rounded mb-4 mr-2">Behance</div>
                                                    <div class="btn btn-outline-info btn-rounded mb-4 mr-2">Twitter</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="friends-section mb-4">
                                <div class="card" style="">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class=""><i class="flaticon-user-7"></i> Friends</h4>
                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="group-section mb-4">
                                <div class="card" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class=""><i class="flaticon-user-6"></i>Groups</h4>
                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <span class="badge badge-danger counter"> 12 </span>
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                        <span class="badge badge-secondary counter">8</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                        <span class="badge badge-success counter">6</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img alt="image-icon" src="assets/img/90x90.jpg">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="weather-section mb-4 br-6">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between w-real-data">
                                            <div class="w-real-time">
                                                <div class="time d-flex">
                                                    <p id="hour" class="mb-0"></p>
                                                    <p id="minut" class="mb-0"></p>
                                                    <p id="date" class="mb-0"></p>
                                                </div>
                                            </div>
                                            <div class="w-real-day">
                                                <div class="date d-flex">
                                                    <div id="day"></div>
                                                    <div id="month"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="w-stats mb-4">
                                            <i class="flaticon-weather mb-4"></i>
                                            <p class="w-temp"><span>13</span></p>
                                            <p class="w-txt">Showers</p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between w-location">
                                            <div class="w-location-city">Los Angeles</div>
                                            <div class="w-location-country">CA</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="photo-section mb-4">
                                <div class="card" style="">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class=""><i class="flaticon-photo-camera"></i> Photos</h4>
                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><img alt="image-gallery" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="image-gallery" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="image-gallery" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="image-gallery" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="image-gallery" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="image-gallery" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="image-gallery" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="image-gallery" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="image-gallery" src="assets/img/90x90.jpg"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 order-xl-0 col-lg-12 order-1 col-md-12 col-sm-12">
                            <div class="tab-content post-section" id="pills-tabContent1">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="card post-editor mb-4" style="">
                                                <div class="card-body p-0">
                                                    <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                                                        <li class="nav-item text-sm-left text-center">
                                                            <a class="nav-link active" id="pills-status-tab" data-toggle="pill" href="#pills-status" role="tab" aria-selected="true"><i class="flaticon-copy-line"></i> Status</a>
                                                        </li>
                                                        <li class="nav-item text-sm-left text-center">
                                                            <a class="nav-link" id="pills-multimedia-tab" data-toggle="pill" href="#pills-multimedia" role="tab" aria-selected="false"><i class="flaticon-display"></i> Media</a>
                                                        </li>
                                                        <li class="nav-item text-sm-left text-center">
                                                            <a class="nav-link" id="pills-blog-post-tab" data-toggle="pill" href="#pills-blog-post" role="tab" aria-selected="false"><i class="flaticon-edit-6"></i> Post</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent2">

                                                        <div class="tab-pane fade show active" id="pills-status" role="tabpanel" aria-labelledby="pills-status-tab">
                                                            <form>
                                                                <div class="media">
                                                                    <img class="mr-3" src="assets/img/200x200.jpg" alt="admin-profile">
                                                                    <div class="media-body">
                                                                        <div class="form-group">
                                                                            <textarea placeholder="What's on your mind" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane fade" id="pills-multimedia" role="tabpanel" aria-labelledby="pills-multimedia-tab">
                                                            <form>
                                                                <div class="media">
                                                                    <img class="mr-3" src="assets/img/200x200.jpg" alt="admin-profile">
                                                                    <div class="media-body">
                                                                        <div class="form-group">
                                                                            <textarea placeholder="Upload Media Here" class="form-control" id="exampleFormControlTextarea2" rows="4"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane fade" id="pills-blog-post" role="tabpanel" aria-labelledby="pills-blog-post-tab">
                                                            <form>
                                                                <div class="media">
                                                                    <img class="mr-3" src="assets/img/200x200.jpg" alt="admin-profile">
                                                                    <div class="media-body">
                                                                        <div class="form-group">
                                                                            <textarea placeholder="Write a Post" class="form-control" id="exampleFormControlTextarea3" rows="4"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="editor-bottom-section">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <ul class="list-inline editor-options">
                                                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Add a Picture">
                                                                        <a href="javascript:void(0);">
                                                                            <i class="flaticon-display-1"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Add a Location">
                                                                        <a href="javascript:void(0);">
                                                                            <i class="flaticon-location-line"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Record Voice">
                                                                        <a href="javascript:void(0);">
                                                                            <i class="flaticon-disk"></i>
                                                                        </a>
                                                                    </li>

                                                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Emoji">
                                                                        <a href="javascript:void(0);">
                                                                            <i class="flaticon-happy-smiling"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6 col-12 text-sm-right">
                                                                <div class="btn-editor-actions">
                                                                    <button class="btn btn-outline-default mb-3 ml-2">Preview</button>
                                                                    <button class="btn btn-gradient-info mb-3 ml-2">Post Status</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12">

                                            <div class="card post text-post mb-4" style="">
                                                <div class="card-body">
                                                    <div class="media user-meta">
                                                        <img class="mr-3" src="assets/img/200x200.jpg" alt="admin-profile">
                                                        <div class="media-body">
                                                            <h4 class="mt-0">Shaun Park</h4>
                                                            <p class="meta-time">11 hours ago</p>
                                                        </div>
                                                    </div>

                                                    <div class="post-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation.</p>
                                                    </div>

                                                    <ul class="list-inline action-options">
                                                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-like-1"></i> Like</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-chat-bubble-line"></i> Comment</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-share-2"></i> Share</a></li>
                                                    </ul>

                                                    <div class="row people-liked-post">
                                                        <div class="col-sm-5 text-center">
                                                            <ul class="list-inline people-liked-img">
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg" class="ml-0">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-7 text-sm-left text-center pb-sm-0 pb-4">
                                                            <div class="people-liked-post-name">
                                                                <span><a href="">Vincent, Mary</a> and 19 other like this</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="media usr-comments">
                                                        <img class="mr-3" src="assets/img/200x200.jpg" alt="admin-profile">
                                                        <div class="media-body">
                                                            <input type="text" class="form-control" placeholder="Write a comment...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card post image-post mb-4" style="">
                                                <div class="card-body">
                                                    <div class="media user-meta">
                                                        <img class="mr-3" src="assets/img/200x200.jpg" alt="admin-profile">
                                                        <div class="media-body">
                                                            <h4 class="mt-0">Shaun Park</h4>
                                                            <p class="meta-time">18 hours ago</p>
                                                        </div>
                                                    </div>

                                                    <div class="post-content">
                                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                                        <div class="photo mx-auto text-center">
                                                            <img alt="image-sample" src="assets/img/450x300.jpg" class="img-fluid">
                                                        </div>
                                                    </div>

                                                    <ul class="list-inline action-options">
                                                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-like-1"></i> Like</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-chat-bubble-line"></i> Comment</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-share-2"></i> Share</a></li>
                                                    </ul>

                                                    <div class="row people-liked-post">
                                                        <div class="col-sm-5 text-center">
                                                            <ul class="list-inline people-liked-img">
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg" class="ml-0">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-7 text-sm-left text-center pb-sm-0 pb-4">
                                                            <div class="people-liked-post-name">
                                                                <span><a href="">Amy, Dale</a> and 22 other like this</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="media usr-comments">
                                                        <img class="mr-3" src="assets/img/200x200.jpg" alt="admin-profile">
                                                        <div class="media-body">
                                                            <input type="text" class="form-control" placeholder="Write a comment...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card post gallery-post mb-4" style="">
                                                <div class="card-body">
                                                    <div class="media user-meta">
                                                        <img class="mr-3" src="assets/img/200x200.jpg" alt="admin-profile">
                                                        <div class="media-body">
                                                            <h4 class="mt-0">Shaun Park</h4>
                                                            <p class="meta-time">21 hours ago</p>
                                                        </div>
                                                    </div>

                                                    <div class="post-content">
                                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.</p>

                                                        <div class="gallery text-center mx-auto">
                                                            <img alt="image-gallery" src="assets/img/220x200.jpg" class="img-fluid mb-3 mt-3 mr-1" style="width: 209px; height: 180px;">
                                                            <img alt="image-gallery" src="assets/img/220x200.jpg" class="img-fluid mb-3 mt-3 mr-1" style="width: 209px; height: 180px;">
                                                            <img alt="image-gallery" src="assets/img/150x130.jpg" class="img-fluid mb-3 mr-1" style="width: 138px; height: 120px;">
                                                            <img alt="image-gallery" src="assets/img/150x130.jpg" class="img-fluid mb-3 mr-1" style="width: 138px; height: 120px;">
                                                            <img alt="image-gallery" src="assets/img/150x130.jpg" class="img-fluid mb-3 mr-1" style="width: 138px; height: 120px;">
                                                        </div>
                                                    </div>

                                                    <ul class="list-inline action-options">
                                                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-like-1"></i> Like</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-chat-bubble-line"></i> Comment</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-share-2"></i> Share</a></li>
                                                    </ul>

                                                    <div class="row people-liked-post">
                                                        <div class="col-sm-5 text-center">
                                                            <ul class="list-inline people-liked-img">
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg" class="ml-0">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="admin-profile" src="assets/img/90x90.jpg">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-7 text-sm-left text-center pb-sm-0 pb-4">
                                                            <div class="people-liked-post-name">
                                                                <span><a href="">Luke, Daisy</a> and 32 other like this</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="media usr-comments">
                                                        <img class="mr-3" src="assets/img/200x200.jpg" alt="admin-profile">
                                                        <div class="media-body">
                                                            <input type="text" class="form-control" placeholder="Write a comment...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">

                            <div class="banner-section mb-4">
                                <div class="card" style="">
                                    <div class="card-body">
                                        <h4 class="">Music Concert</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="instagram-section mb-4">
                                <div class="card" style="">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class=""><i class=""></i> Instagram</h4>
                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                    <li class="list-inline-item"><img alt="admin-profile" src="assets/img/90x90.jpg"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="calendar-section mb-4">
                                <div class="card pb-3" style="">
                                    <div class="card-body">
                                        <div id="calendar" class="bx-top-6">
                                            <div class="pb-5 mb-2 bx-top-6">
                                                <div id="monthrow" class="bx-top-6">
                                                    <button id="prev" onclick="prevMonth()">&#10094;</button>
                                                    <span id="monthc"></span>
                                                    <button id="next" onclick="nextMonth()">&#10095;</button>
                                                </div>
                                                <div class="daysoftheweek">
                                                    <div>Su</div>
                                                    <div>Mo</div>
                                                    <div>Tu</div>
                                                    <div>We</div>
                                                    <div>Th</div>
                                                    <div>Fr</div>
                                                    <div>Sa</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="slideshow-section mb-4">
                                <div class="card" style="">
                                    <div class="card-body p-0">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="assets/img/600x375.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/img/600x375.jpg" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/img/600x375.jpg" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="icon flaticon-left-arrow" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="icon flaticon-right-arrow" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="active-feeds-section mb-4">
                                <div class="card" style="">
                                    <div class="card-body">
                                        <h4 class="">Activity Feed</h4>

                                        <div class="media pb-4 pt-4">
                                            <img class="mr-3" src="assets/img/90x90.jpg" alt="admin-profile">
                                            <div class="media-body">
                                                <h5 class="mt-0"><span class="usr-commented">Angie Lamb</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                <p class="meta-time">8 min ago</p>
                                            </div>
                                        </div>
                                        <div class="media pb-4 pt-4">
                                            <img class="mr-3" src="assets/img/90x90.jpg" alt="admin-profile">
                                            <div class="media-body">
                                                <h5 class="mt-0"><span class="usr-commented">Linda Nelson</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                <p class="meta-time">15 min ago</p>
                                            </div>
                                        </div>
                                        <div class="media pb-4 pt-4">
                                            <img class="mr-3" src="assets/img/90x90.jpg" alt="admin-profile">
                                            <div class="media-body">
                                                <h5 class="mt-0"><span class="usr-commented">Alma Clarke</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                <p class="meta-time">18 min ago</p>
                                            </div>
                                        </div>
                                        <div class="media pb-4 pt-4">
                                            <img class="mr-3" src="assets/img/90x90.jpg" alt="admin-profile">
                                            <div class="media-body">
                                                <h5 class="mt-0"><span class="usr-commented">John Doe</span> Commented on Shaun Park's <span class="comment-topic">photo</span></h5>
                                                <p class="meta-time">20 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  END CONTENT PART  -->
</div>
<!-- END MAIN CONTAINER -->


<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<?= $this->Html->script('/template/assets/js/users/calendar.js') ?>
<?= $this->Html->script('/template/assets/js/us') ?>
<!--  END CUSTOM SCRIPTS FILE  -->
