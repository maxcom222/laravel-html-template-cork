var App = function() {
    var MediaSize = {
        xl: 1200,
        lg: 992,
        md: 991,
        sm: 576
    };
    var ToggleClasses = {
        headerhamburger: '.toggle-sidebar',
        inputFocused: 'input-focused',
    };

    var Selector = {
        getBody: 'body',
        mainHeader: '.header.navbar',
        headerhamburger: '.toggle-sidebar',
        fixed: '.fixed-top',
        mainContainer: '.main-container',
        sidebar: '#sidebar',
        sidebarContent: '#sidebar-content',
        sidebarStickyContent: '.sticky-sidebar-content',
        ariaExpandedTrue: '#sidebar [aria-expanded="true"]',
        ariaExpandedFalse: '#sidebar [aria-expanded="false"]',
        contentWrapper: '#content',
        contentWrapperContent: '.container',
        mainContentArea: '.main-content',
        searchFull: '.toggle-search',
        overlay: {
            sidebar: '.overlay',
            cs: '.cs-overlay',
            search: '.search-overlay'
        }
    };

    var toggleFunction = {
        sidebar: function($recentSubmenu) {
            $('.sidebarCollapse').on('click', function (sidebar) {
                sidebar.preventDefault();

                get_CompactSubmenuShow = document.querySelector('#compact_submenuSidebar');
                get_overlay = document.querySelector('.overlay');
                get_mainContainer = document.querySelector('.main-container')
                if (get_CompactSubmenuShow.classList.contains('show') || get_CompactSubmenuShow.classList.contains('hide-sub') ) {
                    console.log('main1');

                    if (get_CompactSubmenuShow.classList.contains('show')) {
                        get_CompactSubmenuShow.classList.remove("show");
                        get_overlay.classList.remove("show");
                        get_CompactSubmenuShow.classList.add("hide-sub");
                        return;
                            console.log('1')
                    }
                    if (get_CompactSubmenuShow.classList.contains('hide-sub')) {

                        if (get_mainContainer.classList.contains('sidebar-closed')) {
                            get_mainContainer.classList.remove("sidebar-closed");
                            get_mainContainer.classList.add("sbar-open");
                            console.log('2')
                            return;
                        }
                        if (get_mainContainer.classList.contains('sbar-open')) {
                            get_mainContainer.classList.remove("sbar-open");
                            get_CompactSubmenuShow.classList.remove("hide-sub");
                            get_CompactSubmenuShow.classList.add("show");
                            get_overlay.classList.add("show");
                            console.log('3')
                            return;
                        }
                        $(Selector.mainContainer).addClass("sidebar-closed");
                    }

                } else  {
                    console.log('main2');
                    $(Selector.mainContainer).toggleClass("sidebar-closed");
                    $(Selector.mainContainer).toggleClass("sbar-open");
                    if (window.innerWidth <= 991) {
                        if (get_overlay.classList.contains('show')) {
                            get_overlay.classList.remove('show');
                        } else {
                            get_overlay.classList.add('show');
                        }
                    }
                    $('html,body').toggleClass('sidebar-noneoverflow');
                    $('footer .footer-section-1').toggleClass('f-close');
                }
            });
        },
        overlay: function() {
            $('.overlay').on('click', function () {
                // hide sidebar
                var windowWidth = window.innerWidth;
                if (windowWidth <= MediaSize.md) {
                    $('.main-container').addClass('sidebar-closed');
                }
                // hide overlay
                $('.overlay').removeClass('show');
                $('html,body').removeClass('sidebar-noneoverflow');

                $('#compact_submenuSidebar').removeClass('show');
            });
        },
        search: function() {
            $(Selector.searchFull).click(function(event) {
               $(this).parents('.search-animated').find('.search-full').addClass(ToggleClasses.inputFocused);
               $(this).parents('.search-animated').addClass('show-search');
               $(Selector.overlay.search).addClass('show');
               $(Selector.overlay.search).addClass('show');
            });

            $(Selector.overlay.search).click(function(event) {
               $(this).removeClass('show');
               $(Selector.searchFull).parents('.search-animated').find('.search-full').removeClass(ToggleClasses.inputFocused);
               $(Selector.searchFull).parents('.search-animated').removeClass('show-search');
            });
        }
    }

    var inBuiltfunctionality = {
        mainCatActivateScroll: function() {
            const ps = new PerfectScrollbar('.menu-categories', {
                wheelSpeed:.5,
                swipeEasing:!0,
                minScrollbarLength:40,
                maxScrollbarLength:100,
                suppressScrollX: true

            });
        },
        subCatScroll: function() {
            const submenuSidebar = new PerfectScrollbar('#compact_submenuSidebar', {
                wheelSpeed:.5,
                swipeEasing:!0,
                minScrollbarLength:40,
                maxScrollbarLength:100,
                suppressScrollX: true

            });
        },
        onSidebarHover: function() {
            var getMenu = document.querySelectorAll('.menu');

            for (var i = 0; i < getMenu.length; i++) {
                getMenu[i].addEventListener('mouseenter', function() {
                    getHref = this.querySelectorAll('.menu-toggle')[0].getAttribute('href');
                    getElement = document.querySelectorAll('#compact_submenuSidebar > ' + getHref)[0];
                    getCompactSubmenu = document.querySelector('#compact_submenuSidebar');
                    getOverlayElement = document.querySelector('.overlay');
                    getElementActiveClass = document.querySelector('#compact_submenuSidebar > .show');
                    get_mainContainer = document.querySelector('.main-container')

                    if (getCompactSubmenu) {
                        getCompactSubmenu.classList.add("show");
                        getOverlayElement.classList.add('show');
                        getCompactSubmenu.classList.remove('hide-sub');
                        get_mainContainer.classList.remove('sbar-open');
                    }

                    if (getElementActiveClass) {
                        getElementActiveClass.classList.remove("show");
                    }

                    getElement.className += " show";


                    console.log(this.querySelectorAll('.menu-toggle')[0].getAttribute('href'));
                    console.log(getHref);
                    console.log(document.querySelectorAll('#compact_submenuSidebar > ' + getHref)[0])
                })
                getMenu[i].addEventListener('click', function(ev) {
                    ev.preventDefault();
                })
            }

        },
        preventScrollBody: function() {
            $('#compactSidebar, #compact_submenuSidebar').bind('mousewheel DOMMouseScroll', function(e) {
                var scrollTo = null;

                if (e.type == 'mousewheel') {
                    scrollTo = (e.originalEvent.wheelDelta * -1);
                }
                else if (e.type == 'DOMMouseScroll') {
                    scrollTo = 40 * e.originalEvent.detail;
                }

                if (scrollTo) {
                    e.preventDefault();
                    $(this).scrollTop(scrollTo + $(this).scrollTop());
                }
            });
        },
        languageDropdown: function() {
            var getDropdownElement = document.querySelectorAll('.more-dropdown .dropdown-item');
            for (var i = 0; i < getDropdownElement.length; i++) {
                getDropdownElement[i].addEventListener('click', function() {
                    document.querySelectorAll('.more-dropdown .dropdown-toggle > img')[0].setAttribute('src', 'assets/img/' + this.getAttribute('data-img-value') + '.png' );
                })
            }
        },
    }

    var colorPallet = {
        createPallet: function() {
            $cPalletHTMl = '<aside id="colorPallet" class="color-pallet">'+
                                '<div class="pallet-icon">'+
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>'+
                                '</div>'+
                                '<div class="p-colors">'+
                                    '<div id="default" class="color-scheme-default colorPallet-tooltip" data-original-title="Default"></div>'+
                                    '<div id="minimal" class="color-scheme-minimal colorPallet-tooltip" data-original-title="Minimal"></div>'+
                                '</div>'+
                            '</aside>';

            $(".main-container").after($cPalletHTMl);
            colorPallet.colorPalletToggle();
            colorPallet.colorSchemeToggle();
            if (!$(Selector.getBody).hasClass('application')) {
                $('.colorPallet-tooltip').tooltip();
            }
        },
        colorPalletToggle: function () {
            $('.pallet-icon').on('click', function(event) {
                event.preventDefault();
                /* Act on the event */
                thisParent = $(this).parents('.color-pallet');

                if (thisParent.hasClass('show')) {
                    thisParent.removeClass('show');
                } else {
                    thisParent.addClass('show');
                }

            });
        },
        colorSchemeToggle: function () {

            if (!$(Selector.getBody).hasClass('single-page')) {

                if ($(Selector.getBody).hasClass('dashboard-analytics')) {

                    $('#default').on('click', function(event) {
                        event.preventDefault();
                        /* Act on the event */
                        $('.dashboard-analytics-minimal').remove();
                        $(Selector.getBody).removeClass('minimal');
                        Cookies.deleteCookie('minimal_theme');
                    });
                    $('#minimal').on('click', function(event) {
                        event.preventDefault();
                        /* Act on the event */
                        $html = '<link href="assets/css/dashboard/dash_1-minimal.css" rel="stylesheet" type="text/css" class="dashboard-analytics-minimal" />';
                        $(".dashboard-analytics").after($html);
                        $(Selector.getBody).addClass('minimal');
                        Cookies.setCookie('minimal_theme', 1, 1);
                    });

                } else if ($(Selector.getBody).hasClass('dashboard-sales')) {

                    $('#default').on('click', function(event) {
                        event.preventDefault();
                        /* Act on the event */
                        $('.dashboard-sales-minimal').remove();
                        $(Selector.getBody).removeClass('minimal');
                        Cookies.deleteCookie('minimal_theme');
                    });
                    $('#minimal').on('click', function(event) {
                        event.preventDefault();
                        /* Act on the event */

                        $html = '<link href="assets/css/dashboard/dash_2-minimal.css" rel="stylesheet" type="text/css" class="dashboard-sales-minimal" />';
                        $(".dashboard-sales").after($html);
                        $(Selector.getBody).addClass('minimal');
                        Cookies.setCookie('minimal_theme', 1, 1);
                    });

                }

                $('#default').on('click', function(event) {
                    event.preventDefault();
                    /* Act on the event */
                    $('.structure-minimal').remove();
                    $(Selector.getBody).removeClass('minimal');
                    Cookies.deleteCookie('minimal_theme');
                });
                $('#minimal').on('click', function(event) {
                    event.preventDefault();
                    /* Act on the event */
                    $html = '<link href="assets/css/structure-minimal.css" rel="stylesheet" type="text/css" class="structure-minimal" />';
                    $(".structure").after($html);
                    $(Selector.getBody).addClass('minimal');
                    Cookies.setCookie('minimal_theme', 1, 1);
                });

            }
        },
        setcolorScheme: function() {
            if (Cookies.getCookie('minimal_theme') != "") {
                console.log('sfdsf');

                if ($(Selector.getBody).hasClass('dashboard-analytics')) {
                    $html = '<link href="assets/css/dashboard/dash_1-minimal.css" rel="stylesheet" type="text/css" class="dashboard-analytics-minimal" />';
                    $(".dashboard-analytics").after($html);
                } else if ($(Selector.getBody).hasClass('dashboard-sales')) {
                    $html = '<link href="assets/css/dashboard/dash_2-minimal.css" rel="stylesheet" type="text/css" class="dashboard-sales-minimal" />';
                    $(".dashboard-sales").after($html);
                }

                $html = '<link href="assets/css/structure-minimal.css" rel="stylesheet" type="text/css" class="structure-minimal" />';
                $(".structure").after($html);
                $(Selector.getBody).addClass('minimal');
                
            } else {
                $('.dashboard-analytics-minimal').remove();
                $(Selector.getBody).removeClass('minimal');
            }
        },
        setColorPalletTimer: function() {
            if ($(Selector.getBody).hasClass('dashboard-analytics') || $(Selector.getBody).hasClass('dashboard-sales') || $(Selector.getBody).hasClass('starterkit')) {
                setTimeout(function() {
                    $(".color-pallet").addClass('show');
                },3000);
            }
        }
    }

    var Cookies = {
        setCookie: function (cname, cvalue, exdays) {
          var d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          var expires = "expires="+ d.toUTCString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        },
        getCookie: function(cname) {
          var name = cname + "=";
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(';');
          for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
              c = c.substring(1);
              console.log(c)
            }
            if (c.indexOf(name) == 0) {
                console.log(c.substring(name.length, c.length));
              return c.substring(name.length, c.length);
            }
          }
          return "";
        },
        deleteCookie: function (name) {
          document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }
    }

    var _mobileResolution = {
        onRefresh: function() {
            var windowWidth = window.innerWidth;
            if ( windowWidth <= MediaSize.md ) {
                toggleFunction.sidebar();
            }
        },
        
        onResize: function() {
            $(window).on('resize', function(event) {
                event.preventDefault();
                var windowWidth = window.innerWidth;
                if ( windowWidth <= MediaSize.md ) {
                }
            });
        }
        
    }

    var _desktopResolution = {
        onRefresh: function() {
            var windowWidth = window.innerWidth;
            if ( windowWidth > MediaSize.md ) {
                toggleFunction.sidebar(true);
            }
        },
        
        onResize: function() {
            $(window).on('resize', function(event) {
                event.preventDefault();
                var windowWidth = window.innerWidth;
                if ( windowWidth > MediaSize.md ) {
                }
            });
        }
        
    }

    function sidebarFunctionality() {
        function sidebarCloser() {

            if (window.innerWidth <= 991 ) {


                if (!$('body').hasClass('alt-menu')) {

                    $('.main-container').removeClass('sbar-open');
                    $("#container").addClass("sidebar-closed");
                    $('.overlay').removeClass('show');
                    $('#compact_submenuSidebar').removeClass('show')

                } else {
                    $(".navbar").removeClass("expand-header");
                    $('.overlay').removeClass('show');
                    $('#container').removeClass('sbar-open');
                    $('html, body').removeClass('sidebar-noneoverflow');
                }

            } else if (window.innerWidth > 991 ) {

                if (!$('body').hasClass('alt-menu')) {
                    $("#container").removeClass("sidebar-closed");
                    $('#container').removeClass('sbar-open');
                } else {
                    $('html, body').addClass('sidebar-noneoverflow');
                    $("#container").addClass("sidebar-closed");
                    $(".navbar").addClass("expand-header");
                    $('.overlay').addClass('show');
                    $('#container').addClass('sbar-open');
                    $('.sidebar-wrapper [aria-expanded="true"]').parents('li.menu').find('.collapse').removeClass('show');
                }
            }

        }

        function sidebarMobCheck() {
            if (window.innerWidth <= 991 ) {

                if ( $('.main-container').hasClass('sbar-open') || $('#compact_submenuSidebar').hasClass('show') ) {
                    return;
                } else {
                    sidebarCloser()
                }
            } else if (window.innerWidth > 991 ) {
                sidebarCloser();
            }
        }

        sidebarCloser();

        $(window).resize(function(event) {
            sidebarMobCheck();
        });

    }

    return {
        init: function() {
            toggleFunction.overlay();
            toggleFunction.search();
            /*
                Desktop Resoltion fn
            */
            _desktopResolution.onRefresh();
            _desktopResolution.onResize();

            /*
                Mobile Resoltion fn
            */
            _mobileResolution.onRefresh();            
            _mobileResolution.onResize();

            sidebarFunctionality();

            /*
                In Built Functionality fn
            */
            inBuiltfunctionality.mainCatActivateScroll();
            inBuiltfunctionality.subCatScroll();
            inBuiltfunctionality.preventScrollBody();
            inBuiltfunctionality.languageDropdown();
            inBuiltfunctionality.onSidebarHover();


            colorPallet.createPallet();
            colorPallet.setColorPalletTimer();
            colorPallet.setcolorScheme();
        }
    }

}();
