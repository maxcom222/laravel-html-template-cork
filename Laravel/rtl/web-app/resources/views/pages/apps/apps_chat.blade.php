@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

        <div class="chat-section layout-top-spacing">
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12">

                    <div class="chat-system">
                        <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                        <div class="user-list-box">
                            <div class="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                <input type="text" class="form-control" placeholder="Search" />
                            </div>
                            <div class="people">

                                <div class="person" data-chat="person6">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Nia Hillyer">Nia Hillyer</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">How do you do?</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person1">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Sean Freeman">Sean Freeman</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">I was wondering...</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person2">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Alma Clarke">Alma Clarke</span>
                                                <span class="user-meta-time">1:44 PM</span>
                                            </div>
                                            <span class="preview">I've forgotten how it felt before</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person3">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Alan Green">Alan Green</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">But we’re probably gonna need a new carpet.</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person4">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Shaun Park">Shaun Park</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">It’s not that bad...</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person5">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Roxanne">Roxanne</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">Wasup for the third time like is you bling bitch</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person7">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Ernest Reeves">Ernest Reeves</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">Wasup for the third time like is you bling bitch</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person8">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Laurie Fox">Laurie Fox</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">Wasup for the third time like is you bling bitch</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person9">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Xavier">Xavier</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">Wasup for the third time like is you bling bitch</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person10">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Susan Phillips">Susan Phillips</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">Wasup for the third time like is you bling bitch</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person" data-chat="person11">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Dale Butler">Dale Butler</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">Wasup for the third time like is you bling bitch</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="person border-none" data-chat="person12">
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" data-name="Grace Roberts">Grace Roberts</span>
                                                <span class="user-meta-time">2:09 PM</span>
                                            </div>
                                            <span class="preview">Wasup for the third time like is you bling bitch</span>
                                        </div>
                                    </div>
                                </div>                                        
                            </div>
                        </div>
                        <div class="chat-box">

                            <div class="chat-not-selected">
                                <p> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Click User To Chat</p>
                            </div>

                            <div class="overlay-phone-call">
                                <div class="">
                                    <div class="calling-user-info">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle go-back-chat"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line></svg>
                                            <span class="user-name"></span>
                                            <span class="call-status">Calling...</span>
                                        </div>
                                    </div>

                                    <div class="calling-user-img">
                                        <div class="">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="dynamic-image">
                                        </div>

                                        <div class="timer"><label class="minutes">00</label> : <label class="seconds">00</label></div>
                                    </div>

                                    <div class="calling-options">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video switch-to-video-call"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic switch-to-microphone"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus add-more-caller"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-off cancel-call"><path d="M10.68 13.31a16 16 0 0 0 3.41 2.6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7 2 2 0 0 1 1.72 2v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.42 19.42 0 0 1-3.33-2.67m-2.67-3.34a19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91"></path><line x1="23" y1="1" x2="1" y2="23"></line></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="overlay-video-call">
                                <img src="{{asset('storage/img/175x115.jpg')}}" class="video-caller" alt="video-chat">
                                <div class="">
                                    <div class="calling-user-info">
                                        <div class="d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle go-back-chat"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line></svg>
                                            <div class="">
                                                <span class="user-name"></span>
                                                <div class="timer"><label class="minutes">00</label> : <label class="seconds">00</label></div>
                                            </div>
                                            <span class="call-status">Calling...</span>
                                        </div>
                                    </div>

                                    <div class="calling-user-img">
                                        <div class="">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="dynamic-image">
                                        </div>

                                    </div>
                                    <div class="calling-options">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone switch-to-phone-call"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic switch-to-microphone"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus add-more-caller"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video-off cancel-call"><path d="M16 16v1a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2m5.66 0H14a2 2 0 0 1 2 2v3.34l1 1L23 7v10"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                    </div>

                                </div>
                            </div>

                            <div class="chat-box-inner">
                                <div class="chat-meta-user">
                                    <div class="current-chat-user-name"><span><img src="{{asset('storage/img/90x90.jpg')}}" alt="dynamic-image"><span class="name"></span></span></div>

                                    <div class="chat-action-btn align-self-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone  phone-call-screen"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video video-call-screen"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-2">
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Mail</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-conversation-box">
                                    <div id="chat-conversation-box-scroll" class="chat-conversation-box-scroll">
                                        <div class="chat" data-chat="person1">
                                            <div class="conversation-start">
                                                <span>Today, 6:48 AM</span>
                                            </div>
                                            <div class="bubble you">
                                                Hello,
                                            </div>
                                            <div class="bubble you">
                                                It's me.
                                            </div>
                                            <div class="bubble you">
                                                I have a question regarding project.
                                            </div>
                                        </div>
                                        <div class="chat" data-chat="person2">
                                            <div class="conversation-start">
                                                <span>Today, 5:38 PM</span>
                                            </div>
                                            <div class="bubble you">
                                                Hello!
                                            </div>
                                            <div class="bubble me">
                                                Hey!
                                            </div>
                                            <div class="bubble me">
                                                How was your day so far.
                                            </div>
                                            <div class="bubble you">
                                                It was a bit dramatic.
                                            </div>
                                        </div>
                                        <div class="chat" data-chat="person3">
                                            <div class="conversation-start">
                                                <span>Today, 3:38 AM</span>
                                            </div>
                                            <div class="bubble me">
                                                Hey Buddy.
                                            </div>
                                            <div class="bubble me">
                                                What's up
                                            </div>
                                            <div class="bubble you">
                                                I am sick
                                            </div>
                                            <div class="bubble you">
                                                Not comming to office today.
                                            </div>
                                        </div>
                                        <div class="chat" data-chat="person4">
                                            <div class="conversation-start">
                                                <span>Yesterday, 4:20 PM</span>
                                            </div>
                                            <div class="bubble you">
                                                Hi, collect your check
                                            </div>
                                            <div class="bubble me">
                                                Ok, I will be there in 10 mins
                                            </div>
                                        </div>
                                        <div class="chat" data-chat="person5">
                                            <div class="conversation-start">
                                                <span>Today, 6:28 AM</span>
                                            </div>
                                            <div class="bubble you">
                                                Hi
                                            </div>
                                            <div class="bubble you">
                                                Uploaded files to server.
                                            </div>
                                        </div>
                                        <div class="chat" data-chat="person6">
                                            <div class="conversation-start">
                                                <span>Monday, 1:27 PM</span>
                                            </div>
                                            <div class="bubble you">
                                                Hi, I am back from vacation
                                            </div>
                                            <div class="bubble you">
                                                How are you?
                                            </div>
                                            <div class="bubble me">
                                                Welcom Back
                                            </div>
                                            <div class="bubble me">
                                                I am all well
                                            </div>
                                            <div class="bubble you">
                                                Coffee?
                                            </div>
                                        </div>
                                        <div class="chat" data-chat="person7">
                                        </div>
                                        <div class="chat" data-chat="person8">
                                        </div>
                                        <div class="chat" data-chat="person9">
                                        </div>
                                        <div class="chat" data-chat="person10">
                                        </div>
                                        <div class="chat" data-chat="person11">
                                        </div>
                                        <div class="chat" data-chat="person12">
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-footer">
                                    <div class="chat-input">
                                        <form class="chat-form" action="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                            <input type="text" class="mail-write-box form-control" placeholder="Message"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection