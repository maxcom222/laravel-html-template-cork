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
                $('.menu.show').removeClass('show');
                $('body').removeClass('mini_bar-open');
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
        },
        navbarShadow: function() {
            var getNav = document.querySelector('.navbar');
            var testDiv = document.querySelector(".main-content");
            document.addEventListener('scroll', function() {
                var doc = document.documentElement;
                var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
                var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
                if (top >= testDiv.offsetTop) {
                    getNav.style.boxShadow = "0px 20px 20px rgba(126,142,177,0.12)";
                } else { getNav.removeAttribute("style"); }
            })
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
        onSidebarClick: function() {
            var getMenu = document.querySelectorAll('.menu');

            for (var i = 0; i < getMenu.length; i++) {
                getMenu[i].addEventListener('click', function() {

                    get_body = document.querySelector('body');
                    getHref = this.querySelectorAll('.menu-toggle')[0].getAttribute('href');
                    getElement = document.querySelectorAll('#compact_submenuSidebar > ' + getHref)[0];
                    getMenuShowElement = document.querySelector('.menu.show');
                    getCompactSubmenu = document.querySelector('#compact_submenuSidebar');
                    getOverlayElement = document.querySelector('.overlay');
                    getElementActiveClass = document.querySelector('#compact_submenuSidebar > .show');
                    get_mainContainer = document.querySelector('.main-container')

                    if (getMenuShowElement) {
                        getMenuShowElement.classList.remove('show');
                        this.classList.add('show');
                    } else {
                        this.classList.add('show');
                    }

                    if (getCompactSubmenu) {
                        getCompactSubmenu.classList.add("show");
                        getOverlayElement.classList.add('show');
                        get_body.classList.add('mini_bar-open');
                        getCompactSubmenu.classList.remove('hide-sub');
                        get_mainContainer.classList.remove('sbar-open');
                    }

                    if (getElementActiveClass) {
                        getElementActiveClass.classList.remove("show");
                    }

                    getElement.className += " show";
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

    var _mobileResolution = {
        onRefresh: function() {
            var windowWidth = window.innerWidth;
            if ( windowWidth <= MediaSize.md ) {
                toggleFunction.sidebar();
            }
            if ( windowWidth < MediaSize.xl ) {
                inBuiltfunctionality.mainCatActivateScroll();
            }
        },
        
        onResize: function() {
            $(window).on('resize', function(event) {
                event.preventDefault();
                var windowWidth = window.innerWidth;
                if ( windowWidth <= MediaSize.md ) {
                }
                if ( windowWidth < MediaSize.xl ) {
                    inBuiltfunctionality.mainCatActivateScroll();
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

            if (window.innerWidth <= 1199 ) {


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

            } else if (window.innerWidth > 1199 ) {

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
            if (window.innerWidth <= 1199 ) {

                if ( $('.main-container').hasClass('sbar-open') || $('#compact_submenuSidebar').hasClass('show') ) {
                    return;
                } else {
                    sidebarCloser()
                }
            } else if (window.innerWidth > 1199 ) {
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
            toggleFunction.navbarShadow();
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
            inBuiltfunctionality.subCatScroll();
            inBuiltfunctionality.preventScrollBody();
            inBuiltfunctionality.languageDropdown();
            inBuiltfunctionality.onSidebarClick();
        }
    }

}();
