@extends('global.index')
@section('content')

@include('frontend.elements.header')

<!-- Start Element 3 title and search tab -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="elements-3-title-wrap">
                    <h2 class="elements-32">{{ get_phrase('Elevate Your Online Presence with') }}</h2>
                    <h1 class="elements-40">{{ get_phrase('Exclusive Elements') }}</h1>
                    <!-- Select And Search -->
                    <form id="search-element-form" action="{{ route('search_element_products', ['slug' => 'ui-kits']) }}" method="GET">
                        <div class="elements-3-search-wrap d-flex align-items-center">
                            <div class="element-3-select">
                                <div class="selected-item" id="selected-item">
                                    <span id="select-icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1_270)">
                                            <path d="M1.33333 7.33333H8.66667C9.02029 7.33333 9.35943 7.19286 9.60948 6.94281C9.85952 6.69276 10 6.35362 10 6V1.33333C10 0.979711 9.85952 0.640573 9.60948 0.390524C9.35943 0.140476 9.02029 0 8.66667 0L1.33333 0C0.979711 0 0.640573 0.140476 0.390524 0.390524C0.140476 0.640573 0 0.979711 0 1.33333L0 6C0 6.35362 0.140476 6.69276 0.390524 6.94281C0.640573 7.19286 0.979711 7.33333 1.33333 7.33333ZM1.33333 1.33333H8.66667V6H1.33333V1.33333Z" fill="#676C7D"/>
                                            <path d="M14.6667 0H12.6667C12.3131 0 11.9739 0.140476 11.7239 0.390524C11.4739 0.640573 11.3334 0.979711 11.3334 1.33333V6C11.3334 6.35362 11.4739 6.69276 11.7239 6.94281C11.9739 7.19286 12.3131 7.33333 12.6667 7.33333H14.6667C15.0203 7.33333 15.3595 7.19286 15.6095 6.94281C15.8596 6.69276 16 6.35362 16 6V1.33333C16 0.979711 15.8596 0.640573 15.6095 0.390524C15.3595 0.140476 15.0203 0 14.6667 0ZM14.6667 6H12.6667V1.33333H14.6667V6Z" fill="#676C7D"/>
                                            <path d="M3.33333 8.66663H1.33333C0.979711 8.66663 0.640573 8.8071 0.390524 9.05715C0.140476 9.3072 0 9.64634 0 9.99996L0 14.6666C0 15.0202 0.140476 15.3594 0.390524 15.6094C0.640573 15.8595 0.979711 16 1.33333 16H3.33333C3.68696 16 4.02609 15.8595 4.27614 15.6094C4.52619 15.3594 4.66667 15.0202 4.66667 14.6666V9.99996C4.66667 9.64634 4.52619 9.3072 4.27614 9.05715C4.02609 8.8071 3.68696 8.66663 3.33333 8.66663ZM3.33333 14.6666H1.33333V9.99996H3.33333V14.6666Z" fill="#676C7D"/>
                                            <path d="M14.6667 8.66663H7.33333C6.97971 8.66663 6.64057 8.8071 6.39052 9.05715C6.14048 9.3072 6 9.64634 6 9.99996V14.6666C6 15.0202 6.14048 15.3594 6.39052 15.6094C6.64057 15.8595 6.97971 16 7.33333 16H14.6667C15.0203 16 15.3594 15.8595 15.6095 15.6094C15.8595 15.3594 16 15.0202 16 14.6666V9.99996C16 9.64634 15.8595 9.3072 15.6095 9.05715C15.3594 8.8071 15.0203 8.66663 14.6667 8.66663ZM14.6667 14.6666H7.33333V9.99996H14.6667V14.6666Z" fill="#676C7D"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_1_270">
                                            <rect width="16" height="16" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>                          
                                    </span>
                                    <span class="select-title">{{ get_phrase('All Items') }}</span>
                                </div>
                                <div class="select-dropdown">
                                    <ul>
                                        <li class="select-item">
                                            <span id="select-icon">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1_296)">
                                                    <path d="M12.6667 0.666626H3.33333C2.4496 0.667685 1.60237 1.01921 0.97748 1.64411C0.352588 2.269 0.00105857 3.11623 0 3.99996L0 12C0.00105857 12.8837 0.352588 13.7309 0.97748 14.3558C1.60237 14.9807 2.4496 15.3322 3.33333 15.3333H12.6667C13.5504 15.3322 14.3976 14.9807 15.0225 14.3558C15.6474 13.7309 15.9989 12.8837 16 12V3.99996C15.9989 3.11623 15.6474 2.269 15.0225 1.64411C14.3976 1.01921 13.5504 0.667685 12.6667 0.666626ZM3.33333 1.99996H12.6667C13.1971 1.99996 13.7058 2.21067 14.0809 2.58575C14.456 2.96082 14.6667 3.46953 14.6667 3.99996V4.66663H1.33333V3.99996C1.33333 3.46953 1.54405 2.96082 1.91912 2.58575C2.29419 2.21067 2.8029 1.99996 3.33333 1.99996ZM12.6667 14H3.33333C2.8029 14 2.29419 13.7892 1.91912 13.4142C1.54405 13.0391 1.33333 12.5304 1.33333 12V5.99996H14.6667V12C14.6667 12.5304 14.456 13.0391 14.0809 13.4142C13.7058 13.7892 13.1971 14 12.6667 14ZM12.6667 8.66663C12.6667 8.84344 12.5964 9.01301 12.4714 9.13803C12.3464 9.26305 12.1768 9.33329 12 9.33329H4C3.82319 9.33329 3.65362 9.26305 3.5286 9.13803C3.40357 9.01301 3.33333 8.84344 3.33333 8.66663C3.33333 8.48982 3.40357 8.32025 3.5286 8.19522C3.65362 8.0702 3.82319 7.99996 4 7.99996H12C12.1768 7.99996 12.3464 8.0702 12.4714 8.19522C12.5964 8.32025 12.6667 8.48982 12.6667 8.66663ZM10 11.3333C10 11.5101 9.92976 11.6797 9.80474 11.8047C9.67971 11.9297 9.51014 12 9.33333 12H4C3.82319 12 3.65362 11.9297 3.5286 11.8047C3.40357 11.6797 3.33333 11.5101 3.33333 11.3333C3.33333 11.1565 3.40357 10.9869 3.5286 10.8619C3.65362 10.7369 3.82319 10.6666 4 10.6666H9.33333C9.51014 10.6666 9.67971 10.7369 9.80474 10.8619C9.92976 10.9869 10 11.1565 10 11.3333ZM2 3.33329C2 3.20144 2.0391 3.07255 2.11235 2.96291C2.18561 2.85328 2.28973 2.76783 2.41154 2.71737C2.53336 2.66691 2.66741 2.65371 2.79673 2.67944C2.92605 2.70516 3.04484 2.76865 3.13807 2.86189C3.23131 2.95512 3.2948 3.07391 3.32052 3.20323C3.34625 3.33255 3.33305 3.4666 3.28259 3.58841C3.23213 3.71023 3.14668 3.81435 3.03705 3.88761C2.92741 3.96086 2.79852 3.99996 2.66667 3.99996C2.48986 3.99996 2.32029 3.92972 2.19526 3.8047C2.07024 3.67967 2 3.5101 2 3.33329ZM4 3.33329C4 3.20144 4.0391 3.07255 4.11235 2.96291C4.18561 2.85328 4.28973 2.76783 4.41154 2.71737C4.53336 2.66691 4.66741 2.65371 4.79673 2.67944C4.92605 2.70516 5.04484 2.76865 5.13807 2.86189C5.23131 2.95512 5.2948 3.07391 5.32052 3.20323C5.34625 3.33255 5.33305 3.4666 5.28259 3.58841C5.23213 3.71023 5.14668 3.81435 5.03705 3.88761C4.92741 3.96086 4.79852 3.99996 4.66667 3.99996C4.48986 3.99996 4.32029 3.92972 4.19526 3.8047C4.07024 3.67967 4 3.5101 4 3.33329ZM6 3.33329C6 3.20144 6.0391 3.07255 6.11235 2.96291C6.18561 2.85328 6.28973 2.76783 6.41154 2.71737C6.53336 2.66691 6.66741 2.65371 6.79673 2.67944C6.92605 2.70516 7.04484 2.76865 7.13807 2.86189C7.23131 2.95512 7.2948 3.07391 7.32052 3.20323C7.34625 3.33255 7.33305 3.4666 7.28259 3.58841C7.23213 3.71023 7.14668 3.81435 7.03705 3.88761C6.92741 3.96086 6.79852 3.99996 6.66667 3.99996C6.48986 3.99996 6.32029 3.92972 6.19526 3.8047C6.07024 3.67967 6 3.5101 6 3.33329Z" fill="#676C7D"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1_296">
                                                            <rect width="16" height="16" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="select-title">{{ get_phrase('Ui-kits') }}</span>
                                        </li>
                                        <li class="select-item">
                                            <span id="select-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.65823 10.4797C0.493672 10.4797 0.342828 10.4123 0.205697 10.2774C0.0685656 10.1425 0 9.97539 0 9.77601C0 9.57663 0.0658905 9.40771 0.197671 9.26925C0.329436 9.1308 0.474516 9.06157 0.632913 9.06157H6.12625C6.31283 9.06157 6.46923 9.12901 6.59546 9.26388C6.72169 9.39875 6.78481 9.56588 6.78481 9.76526C6.78481 9.96465 6.72399 10.1336 6.60235 10.272C6.4807 10.4105 6.32971 10.4797 6.14939 10.4797H0.65823ZM0.65823 14C0.493672 14 0.342828 13.9326 0.205697 13.7977C0.0685656 13.6628 0 13.4957 0 13.2963C0 13.0969 0.0658905 12.928 0.197671 12.7895C0.329436 12.6511 0.474516 12.5818 0.632913 12.5818H6.12625C6.31283 12.5818 6.46923 12.6493 6.59546 12.7841C6.72169 12.919 6.78481 13.0862 6.78481 13.2855C6.78481 13.4849 6.72399 13.6538 6.60235 13.7923C6.4807 13.9308 6.32971 14 6.14939 14H0.65823ZM0.65823 6.9657C0.493672 6.9657 0.342828 6.89827 0.205697 6.7634C0.0685656 6.62852 0 6.46139 0 6.26201C0 6.06263 0.0658905 5.89371 0.197671 5.75525C0.329436 5.6168 0.474516 5.54757 0.632913 5.54757H6.12625C6.31283 5.54757 6.46923 5.61501 6.59546 5.74988C6.72169 5.88475 6.78481 6.05188 6.78481 6.25127C6.78481 6.45065 6.72399 6.61957 6.60235 6.75802C6.4807 6.89648 6.32971 6.9657 6.14939 6.9657H0.65823ZM0.65823 3.41816C0.493672 3.41816 0.342828 3.35072 0.205697 3.21585C0.0685656 3.08098 0 2.91385 0 2.71447C0 2.51508 0.0658905 2.34617 0.197671 2.20771C0.329436 2.06924 0.474516 2 0.632913 2H6.12625C6.31283 2 6.46923 2.06745 6.59546 2.20234C6.72169 2.33721 6.78481 2.50434 6.78481 2.70372C6.78481 2.90311 6.72399 3.07202 6.60235 3.21048C6.4807 3.34893 6.32971 3.41816 6.14939 3.41816H0.65823ZM10.5392 14C10.3075 14 10.1133 13.916 9.95664 13.7479C9.79991 13.5798 9.72155 13.3715 9.72155 13.1231V2.90421C9.72155 2.6612 9.79979 2.44976 9.95628 2.26987C10.1128 2.08996 10.3066 2 10.538 2H15.2027C15.434 2 15.6247 2.08996 15.7748 2.26987C15.9249 2.44976 16 2.6612 16 2.90421V13.1231C16 13.3715 15.9244 13.5798 15.7732 13.7479C15.6221 13.916 15.4347 14 15.2113 14H10.5392ZM11.038 3.41816V12.5818H14.6836V3.41816H11.038Z" fill="#676C7D"/>
                                            </svg>                                
                                            </span>
                                            <span class="select-title">{{ get_phrase('Components') }}</span>
                                        </li>
                                        <li class="select-item">
                                            <span id="select-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1_288)">
                                                <path d="M9.88733 11.3333C9.71667 11.3333 9.546 11.268 9.416 11.138C9.15533 10.8773 9.15533 10.456 9.416 10.1953L11.138 8.47333C11.2633 8.34733 11.3333 8.18 11.3333 8.00133C11.3333 7.82267 11.264 7.656 11.138 7.53L9.416 5.80733C9.15533 5.54667 9.15533 5.12467 9.416 4.86467C9.67667 4.604 10.098 4.604 10.3587 4.86467L12.0807 6.58667C12.458 6.964 12.6667 7.46667 12.6667 8.00067C12.6667 8.53467 12.4587 9.03733 12.0807 9.41533L10.3587 11.1373C10.2287 11.2673 10.058 11.3333 9.88733 11.3333ZM6.584 11.1347C6.84467 10.874 6.84467 10.4527 6.584 10.192L4.862 8.47C4.736 8.344 4.66667 8.17667 4.66667 7.998C4.66667 7.81933 4.736 7.65267 4.862 7.52667L6.584 5.80467C6.84467 5.544 6.84467 5.12267 6.584 4.862C6.32333 4.60133 5.902 4.60133 5.64133 4.862L3.91933 6.584C3.54133 6.962 3.33333 7.464 3.33333 7.99867C3.33333 8.53333 3.54133 9.03533 3.91933 9.41333L5.64133 11.1353C5.77133 11.2653 5.942 11.3307 6.11267 11.3307C6.28333 11.3307 6.454 11.2647 6.584 11.1347ZM16 12.6667V3.33333C16 1.49533 14.5047 0 12.6667 0H3.33333C1.49533 0 0 1.49533 0 3.33333V12.6667C0 14.5047 1.49533 16 3.33333 16H12.6667C14.5047 16 16 14.5047 16 12.6667ZM12.6667 1.33333C13.7693 1.33333 14.6667 2.23067 14.6667 3.33333V12.6667C14.6667 13.7693 13.7693 14.6667 12.6667 14.6667H3.33333C2.23067 14.6667 1.33333 13.7693 1.33333 12.6667V3.33333C1.33333 2.23067 2.23067 1.33333 3.33333 1.33333H12.6667Z" fill="#676C7D"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_1_288">
                                                <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                            </span>
                                            <span class="select-title">{{ get_phrase('Html') }}</span>
                                        </li>
                                        <li class="select-item">
                                            <span id="select-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1_308)">
                                                <path d="M7.29332 14.6171L2.59678 11.9307C2.37446 11.784 2.2011 11.6043 2.07671 11.3916C1.95231 11.1789 1.89012 10.945 1.89012 10.6898V5.33896C1.89012 5.08313 1.95195 4.8486 2.07561 4.63535C2.19927 4.42212 2.373 4.25035 2.59678 4.12003L7.29332 1.41165C7.51799 1.28204 7.7545 1.21723 8.00283 1.21723C8.25116 1.21723 8.48577 1.28204 8.70668 1.41165L13.4032 4.12003C13.627 4.25035 13.8007 4.42212 13.9244 4.63535C14.0481 4.8486 14.1099 5.08313 14.1099 5.33896V10.7118C14.1099 10.9614 14.0477 11.1903 13.9233 11.3984C13.7989 11.6066 13.6255 11.784 13.4032 11.9307L8.70668 14.6171C8.48201 14.7467 8.2455 14.8115 7.99716 14.8115C7.74884 14.8115 7.51423 14.7467 7.29332 14.6171ZM7.42859 13.3982V8.32967L3.03293 5.72777V10.7118C3.03293 10.7569 3.04421 10.7991 3.06676 10.8386C3.08929 10.878 3.12311 10.9118 3.16821 10.94L7.42859 13.3982ZM8.57141 13.3982L12.8318 10.94C12.8769 10.9118 12.9107 10.878 12.9332 10.8386C12.9558 10.7991 12.9671 10.7569 12.9671 10.7118V5.74975L8.57141 8.35165V13.3982ZM0.57576 4.35162C0.415085 4.35162 0.27896 4.29685 0.167385 4.18733C0.055795 4.07782 0 3.94211 0 3.78021V1.41337C0 1.02469 0.138396 0.691966 0.415188 0.415189C0.691965 0.138397 1.02469 0 1.41337 0H3.78021C3.94211 0 4.07782 0.0543519 4.18733 0.163056C4.29685 0.271744 4.35162 0.406427 4.35162 0.567101C4.35162 0.727776 4.29685 0.8639 4.18733 0.975476C4.07782 1.08705 3.94211 1.14284 3.78021 1.14284H1.41337C1.33447 1.14284 1.26965 1.1682 1.21893 1.21893C1.1682 1.26965 1.14284 1.33447 1.14284 1.41337V3.78021C1.14284 3.94211 1.08849 4.07782 0.979805 4.18733C0.871116 4.29685 0.736434 4.35162 0.57576 4.35162ZM1.41337 16C1.02469 16 0.691965 15.8616 0.415188 15.5848C0.138396 15.308 0 14.9753 0 14.5866V12.2198C0 12.0579 0.0543518 11.9222 0.163055 11.8127C0.271744 11.7031 0.406426 11.6484 0.5671 11.6484C0.727775 11.6484 0.8639 11.7031 0.975475 11.8127C1.08705 11.9222 1.14284 12.0579 1.14284 12.2198V14.5866C1.14284 14.6655 1.1682 14.7303 1.21893 14.7811C1.26965 14.8318 1.33447 14.8572 1.41337 14.8572H3.78021C3.94211 14.8572 4.07782 14.9115 4.18733 15.0202C4.29685 15.1289 4.35162 15.2636 4.35162 15.4242C4.35162 15.5849 4.29685 15.721 4.18733 15.8326C4.07782 15.9442 3.94211 16 3.78021 16H1.41337ZM14.5866 16H12.2198C12.0579 16 11.9222 15.9456 11.8127 15.8369C11.7031 15.7283 11.6484 15.5936 11.6484 15.4329C11.6484 15.2722 11.7031 15.1361 11.8127 15.0245C11.9222 14.9129 12.0579 14.8572 12.2198 14.8572H14.5866C14.6655 14.8572 14.7303 14.8318 14.7811 14.7811C14.8318 14.7303 14.8572 14.6655 14.8572 14.5866V12.2198C14.8572 12.0579 14.9115 11.9222 15.0202 11.8127C15.1289 11.7031 15.2636 11.6484 15.4242 11.6484C15.5849 11.6484 15.721 11.7031 15.8326 11.8127C15.9442 11.9222 16 12.0579 16 12.2198V14.5866C16 14.9753 15.8616 15.308 15.5848 15.5848C15.308 15.8616 14.9753 16 14.5866 16ZM14.8572 3.78021V1.41337C14.8572 1.33447 14.8318 1.26965 14.7811 1.21893C14.7303 1.1682 14.6655 1.14284 14.5866 1.14284H12.2198C12.0579 1.14284 11.9222 1.08849 11.8127 0.979805C11.7031 0.871116 11.6484 0.736435 11.6484 0.57576C11.6484 0.415086 11.7031 0.278961 11.8127 0.167386C11.9222 0.0557956 12.0579 0 12.2198 0H14.5866C14.9753 0 15.308 0.138397 15.5848 0.415189C15.8616 0.691966 16 1.02469 16 1.41337V3.78021C16 3.94211 15.9456 4.07782 15.8369 4.18733C15.7283 4.29685 15.5936 4.35162 15.4329 4.35162C15.2722 4.35162 15.1361 4.29685 15.0245 4.18733C14.9129 4.07782 14.8572 3.94211 14.8572 3.78021ZM8 7.34745L12.2807 4.81656L8.13525 2.43278C8.09017 2.4046 8.04508 2.39051 8 2.39051C7.95491 2.39051 7.90983 2.4046 7.86475 2.43278L3.71931 4.81656L8 7.34745Z" fill="#676C7D"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_1_308">
                                                <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>                                                      
                                            </span>
                                            <span class="select-title">{{ get_phrase('Themes') }}</span>
                                        </li>
                                        <li class="select-item">
                                            <span id="select-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1_304)">
                                                <path d="M5.66667 3.33333C6.22 3.33333 6.66667 3.78 6.66667 4.33333C6.66667 4.88667 6.22 5.33333 5.66667 5.33333C5.11333 5.33333 4.66667 4.88667 4.66667 4.33333C4.66667 3.78 5.11333 3.33333 5.66667 3.33333ZM10.5467 5.45333L10.3133 4.50667C10.24 4.21333 9.97333 4 9.66667 4C9.36 4 9.09333 4.20667 9.02 4.50667L8.78667 5.44667L7.85333 5.66C7.55333 5.72667 7.34 5.99333 7.34 6.3C7.34 6.60667 7.54 6.87333 7.83333 6.95333L8.78667 7.21333L9.02667 8.16667C9.1 8.46 9.36667 8.67333 9.67334 8.67333C9.98 8.67333 10.2467 8.46667 10.32 8.16667L10.5533 7.22L11.5 6.98667C11.7933 6.91333 12.0067 6.64667 12.0067 6.34C12.0067 6.03333 11.8 5.76667 11.5 5.69333L10.5533 5.46L10.5467 5.45333ZM11.0733 3.25333L12.2467 3.74667L12.7133 4.91333C12.8133 5.16667 13.06 5.33333 13.3333 5.33333C13.6067 5.33333 13.8533 5.16667 13.9533 4.91333L14.42 3.75333L15.58 3.28667C15.8333 3.18667 16 2.94 16 2.66667C16 2.39333 15.8333 2.14667 15.58 2.04667L14.42 1.58L13.9533 0.42C13.8533 0.166667 13.6067 0 13.3333 0C13.06 0 12.8133 0.166667 12.7133 0.42L12.2533 1.57333L11.1 2.01333C10.8467 2.10667 10.6733 2.35333 10.6667 2.62667C10.6667 2.9 10.82 3.14667 11.0733 3.25333ZM16 6V12.6667C16 14.5067 14.5067 16 12.6667 16H3.33333C1.49333 16 0 14.5067 0 12.6667V3.33333C0 1.49333 1.49333 0 3.33333 0H10C10.3667 0 10.6667 0.3 10.6667 0.666667C10.6667 1.03333 10.3667 1.33333 10 1.33333H3.33333C2.23333 1.33333 1.33333 2.23333 1.33333 3.33333V7.72667L1.70667 7.35333C2.6 6.46 4.06 6.46 4.96 7.35333L8.68 11.0733C9.04 11.4333 9.63333 11.4333 9.99333 11.0733L10.38 10.6867C11.2733 9.79333 12.7333 9.79333 13.6333 10.6867L14.6733 11.7267V6C14.6733 5.63333 14.9733 5.33333 15.34 5.33333C15.7067 5.33333 16.0067 5.63333 16.0067 6H16ZM14.5067 13.4467L12.68 11.62C12.3067 11.2467 11.6933 11.2467 11.3133 11.62L10.9267 12.0067C10.0467 12.8867 8.60667 12.8867 7.72667 12.0067L4.00667 8.28667C3.63333 7.91333 3.02 7.91333 2.64 8.28667L1.32 9.60667V12.6667C1.32 13.7667 2.22 14.6667 3.32 14.6667H12.6533C13.48 14.6667 14.1867 14.1667 14.4933 13.4467H14.5067Z" fill="#676C7D"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_1_304">
                                                <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>                                                                      
                                            </span>
                                            <span class="select-title">{{ get_phrase('Presentation') }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Selected value input -->
                                <input type="hidden" id="selected-field" name="" value="All Items">
                            </div>
                            <div class="element-3-search">
                                <input type="search" class="form-control" id="search" name="search" value="" placeholder="Search all elements..." />
                                <button type="submit"><img src="{{ asset('assets/img/new-icons-images/gray-search.svg') }}" alt=""></button>
                            </div>
                        </div>
                    </form>
                    <!-- Tabs -->
                    <div class="element-filter-tabs">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            @foreach($element_categories as $element_category)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if($element_category->slug == 'ui-kits') active @endif" id="pills-{{ $element_category->slug }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $element_category->slug }}" type="button" role="tab" aria-controls="pills-{{ $element_category->slug }}" aria-selected="false">
                                    <img src="{{ asset('assets/img/new-icons-images/blue-search.svg') }}" alt="">
                                    {{ $element_category->name }}
                                </button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="tab-content element-tab-content" id="pills-tabContent">
            @foreach($element_categories as $element_category)
            @php
                $elements = App\Models\ElementProduct::where('element_category_id', $element_category->id)->orderBy('id', 'desc')->take(16)->get();
            @endphp
            <div class="tab-pane fade @if($element_category->slug == 'ui-kits') show active @endif" id="pills-{{ $element_category->slug }}" role="tabpanel" aria-labelledby="pills-{{ $element_category->slug }}-tab" tabindex="0">
                <div class="row justify-content-center">
                @foreach($elements as $element)
                        @if($element_category->slug != 'components')
                            @php
                            if(isset($element->like)) {
                                $likes = json_decode($element->like);
                            } else {
                                $likes = [];
                            }
                            if(Auth::check()) {
                                $wishlists = json_decode(auth()->user()->wishlists);
                            }
                            if(empty($wishlists)){
                                $wishlists = [];
                            }
                            @endphp
                            <!-- Single Element -->
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <a href="{{ route('element_product_details', ['title' => slugify($element->title.'-'.$element->id)]) }}" class="product-item-two product-item-add">
                                    <div class="thumbnil-price">
                                        <img src="{{ element_server_url($element->product_id, $element->product_to_elementCategory->slug).$element->thumbnail }}" alt="" />
                                        <span class="product-price">
                                            @if($element->price_type == 'paid')
                                                @php
                                                    try {
                                                        $prices = json_decode($element->price, true);
                                                        $currency = strtoupper(session('session_currency'));
                                                        $price = collect($prices)->firstWhere('currency', $currency)['amount'];
                                                        $isJson = (json_last_error() == JSON_ERROR_NONE);
                                                    } catch (\Exception $e) {
                                                        $isJson = false;
                                                    }
                                                @endphp

                                                @if ($isJson)
                                                {{ currency($price) }}
                                                @else
                                                    {{ currency($element->price) }}
                                                @endif
                                            @else
                                                {{ get_phrase('Free') }}
                                            @endif
                                        </span>
                                        <ul class="wishlist-bookmark">
                                            <li
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="left"
                                                data-bs-title="Like"
                                            >
                                                <span @if(Auth::check() && in_array(auth()->user()->id, $likes)) class="active" @endif data-id="heart-{{ $element->id }}" id="{{ $element->id }}" onclick="handleLike(this)"
                                                ><i class="fa-solid fa-heart"></i
                                                ></span>
                                            </li>
                                            <li
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="left"
                                                data-bs-title="Bookmark"
                                            >
                                                <span @if(in_array($element->id, $wishlists)) class="active" @endif data-id="wishlist-{{ $element->id }}" id="{{ $element->id }}" onclick="handleWishList(this)"
                                                ><i class="fa-solid fa-bookmark"></i
                                                ></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <div class="product-title">{{ $element->title }}</div>
                                    </div>
                                </a>
                            </div>
                        @else
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-element-3">
                                    <a href="{{ route('element_product_details', ['title' => slugify($element->title.'-'.$element->id)]) }}" class="element-card-link"></a>
                                    <img src="{{ element_server_url($element->product_id, $element->product_to_elementCategory->slug).$element->thumbnail }}" alt="">
                                    <p class="card-free">
                                        @if($element->price_type == 'paid')
                                            {{ currency($element->price) }}
                                        @else
                                            {{ get_phrase('Free') }}
                                        @endif
                                    </p>
                                    <div class="card-overlay">
                                        <div class="overlay-copy-see d-flex align-items-center justify-content-between">
                                            <button class="overlay-copy">{{ get_phrase('Copy component') }}</button>
                                            <button type="button" class="overlay-see" data-bs-placement="top" data-bs-title="Preview" data-bs-toggle="tooltip" onclick="elementModal('{{ route('element_product_details_modal', ['title' => slugify($element->title.'-'.$element->id)]) }}')">
                                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00192 9.14742C9.87671 9.14742 10.6197 8.84124 11.2308 8.22888C11.8419 7.6165 12.1474 6.87291 12.1474 5.9981C12.1474 5.12331 11.8413 4.38036 11.2289 3.76925C10.6165 3.15814 9.87294 2.85258 8.99813 2.85258C8.12334 2.85258 7.38039 3.15876 6.76928 3.77112C6.15817 4.3835 5.85261 5.12709 5.85261 6.0019C5.85261 6.87669 6.15879 7.61964 6.77115 8.23075C7.38353 8.84186 8.12712 9.14742 9.00192 9.14742ZM9.00003 8C8.44447 8 7.97225 7.80556 7.58336 7.41667C7.19447 7.02778 7.00003 6.55556 7.00003 6C7.00003 5.44444 7.19447 4.97222 7.58336 4.58333C7.97225 4.19444 8.44447 4 9.00003 4C9.55558 4 10.0278 4.19444 10.4167 4.58333C10.8056 4.97222 11 5.44444 11 6C11 6.55556 10.8056 7.02778 10.4167 7.41667C10.0278 7.80556 9.55558 8 9.00003 8ZM9.00003 11.5833C7.30132 11.5833 5.73509 11.1327 4.30134 10.2315C2.86757 9.33038 1.71694 8.14422 0.849422 6.67306C0.779978 6.5673 0.7327 6.45872 0.707589 6.34733C0.682477 6.23596 0.669922 6.12165 0.669922 6.0044C0.669922 5.88715 0.682477 5.77137 0.707589 5.65706C0.7327 5.54274 0.779978 5.4327 0.849422 5.32694C1.71694 3.85578 2.86757 2.66962 4.30134 1.76846C5.73509 0.867278 7.30132 0.416687 9.00003 0.416687C10.6987 0.416687 12.265 0.867278 13.6987 1.76846C15.1325 2.66962 16.2831 3.85578 17.1506 5.32694C17.2201 5.4327 17.2674 5.54128 17.2925 5.65267C17.3176 5.76404 17.3301 5.87835 17.3301 5.9956C17.3301 6.11285 17.3176 6.22863 17.2925 6.34294C17.2674 6.45726 17.2201 6.5673 17.1506 6.67306C16.2831 8.14422 15.1325 9.33038 13.6987 10.2315C12.265 11.1327 10.6987 11.5833 9.00003 11.5833ZM9.00003 10.5C10.5556 10.5 11.9931 10.0972 13.3125 9.29167C14.632 8.48611 15.6459 7.38889 16.3542 6C15.6459 4.61111 14.632 3.51389 13.3125 2.70833C11.9931 1.90278 10.5556 1.5 9.00003 1.5C7.44447 1.5 6.00697 1.90278 4.68753 2.70833C3.36808 3.51389 2.35419 4.61111 1.64586 6C2.35419 7.38889 3.36808 8.48611 4.68753 9.29167C6.00697 10.0972 7.44447 10.5 9.00003 10.5Z" fill="#1C1B1F"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="overlay-categories">
                                            @php
                                                $tags = $element->product_to_tag();
                                                $tagCount = $tags->count();
                                            @endphp
                                            <ul class="d-flex align-items-center">
                                                @foreach($tags->take(3) as $tag)
                                                    <li><a href="{{ route('search_element_products_by_tag', ['slug' => 'components', 'tag' => $tag->slug]) }}">{{ $tag->name }}</a></li>
                                                @endforeach
                                                @if($tagCount > 3)
                                                    <li><a href="#">+{{ $tagCount - 3 }} more</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- See More button -->
                    <div class="col-md-12">
                        <div class="element-more-btn-wrap d-flex justify-content-center">
                            <a href="{{ route('search_element_products', ['slug' => $element_category->slug]) }}" class="element-more-btn d-flex align-items-center">{{ get_phrase('See More') }}<i class="fa-solid fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Element 3 title and search  -->

<!-- Start Transform Area -->
<section class="pb-110">
    <div class="container">
        <div class="el-title-three text-center pb-50">
            <h4 class="title">{{ get_phrase('Transform your ideas into masterpieces') }} <span>{{ get_phrase('with Creative Elements') }}</span></h4>
            <p class="info">{{ get_phrase('Unleash your potential with our products for crafting digital excellence and making your imagination into reality') }}.</p>
        </div>
        <div class="row flex-column-reverse flex-lg-row align-items-center">
            <div class="col-lg-6">
                <ul class="choice-one-items">
                    <li>
                        <div class="choice-item">
                            <div class="icon"><img src="{{ asset('assets/img/webp/high-quality.webp') }}" alt="" /></div>
                            <div class="content">
                                <h3 class="title">{{ get_phrase('High-quality UI Resources') }}</h3>
                                <p class="info">{{ get_phrase('Access a wide variety of innovative UI elements for effortless design improvement') }}.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="choice-item">
                            <div class="icon"><img src="{{ asset('assets/img/webp/checkmark.webp') }}" alt="" /></div>
                            <div class="content">
                                <h3 class="title">{{ get_phrase('Following Design Trend') }}</h3>
                                <p class="info">{{ get_phrase('Stay ahead of the curve and meet the demands with our trend-savvy UI components') }}.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="choice-item">
                            <div class="icon"><img src="{{ asset('assets/img/webp/searching-done.webp') }}" alt="" /></div>
                            <div class="content">
                                <h3 class="title">{{ get_phrase('New Design Release Every Week') }}</h3>
                                <p class="info">{{ get_phrase('Every week, we provide new, improved designs to keep you on the cutting edge') }}.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="choice-item">
                            <div class="icon"><img src="{{ asset('assets/img/webp/digital-content.webp') }}" alt="" /></div>
                            <div class="content">
                                <h3 class="title">{{ get_phrase('Ready For Customization') }}</h3>
                                <p class="info">{{ get_phrase('Our developers customize solutions to meet your unique needs because your requirements are our top priority') }}.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="img-fluid"><img src="{{ asset('assets/img/webp/banner-image-4.webp') }}" alt=""></div>
            </div>
        </div>
    </div>
</section>
<!-- End Transform Area -->

<!-- Start Pricing -->
<section class="padding-bottom-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="pricing-n-title">
                    <h1 class="text-52">{{ get_phrase('Explore Our Competitive Pricing Model') }}</h1>
                    <p class="text-22">{{ get_phrase('We provide you with clarity in pricing with our transparent cost approach') }}.</p>
                </div>
            </div>
            @foreach($packages as $key => $package)
            @php
            if($package->interval == 'monthly'){
                $interval = '/ month';

                if($package->interval_period == 6){
                    $interval_period_text = 'Billed 1/2 yearly';
                } else if($package->interval_period == 12){
                    $interval_period_text = 'Billed yearly';
                } else {
                    $interval_period_text = 'Access for'.' '.$package->interval_period.' '.$interval;
                }
            } else {
                $interval = '';
                $interval_period_text = 'Lifetime access';
            }
            @endphp
            <div class="col-lg-4 col-md-6">
                <div class="single-n-pricing @if($key == 1) active @endif">
                    <div class="pricing-n-popular d-flex align-items-center justify-content-between">
                        <h4 class="text-22">{{ $package->name }}</h4>
                    </div>
                    @php
                        $prices = json_decode($package->price, true);
                        $dis_price = json_decode($package->discounted_price, true);
                        $currency = strtoupper(session('session_currency'));
                        $price = collect($prices)->firstWhere('currency', $currency)['amount'];
                        $dis_price = collect($dis_price)->firstWhere('currency', $currency)['amount'];
                    @endphp
                    <div class="pricing-n-price d-flex">
                        <h2 class="pricing-price-l d-flex"><span>{{ currency($dis_price) }}</span></h2>
                        <h3 class="pricing-price-r d-flex"><span>{{ $price }}</span><span> {{ $interval }}</span></h3>
                    </div>
                    <p class="text-15 pricing-n-batch">{{ $interval_period_text }}</p>
                    @php
                        $packages_features = json_decode($package->feature_list);  
                    @endphp
                    <div class="pricing-n-list">
                        <ul>
                        @foreach ($packages_features as $packages_feature)
                            <li>{{ $packages_feature }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <a href="javascript:;" class="pricing-n-btn text-18" onclick="commonModal('{{ route('element_checkout', ['id' => $package->id]) }}')">{{ get_phrase('Upgrade Plan') }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Pricing -->

<!-- Start Trending Categoris -->
<section class="el-treading pb-60">
    <div class="container">
        <h4 class="el-title-two text-center pb-40">{{ get_phrase('Browse Trending') }} {{ get_phrase('') }}<span>{{ get_phrase('Categories') }}</span></h4>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="trending-item-wrap">
                    <a href="{{ route('search_element_products', ['slug' => 'ui-kits']) }}" class="trending-item-one" style="--bg: linear-gradient(135deg, rgba(255, 233, 239, 1) 0%, rgba(246, 229, 252, 1) 100%)">
                        <div class="img"><img src="{{ asset('assets/img/webp/graphics.png') }}" alt=""></div>
                        <p class="title">{{ get_phrase('UI Kits') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="trending-item-wrap">
                    <a href="{{ route('search_element_products', ['slug' => 'components']) }}" class="trending-item-one" style="--bg: linear-gradient(135deg, rgba(242, 252, 255, 1) 0%, rgba(213, 235, 255, 1) 100%)">
                        <div class="img"><img src="{{ asset('assets/img/webp/components.webp') }}" alt=""></div>
                        <p class="title">{{ get_phrase('Components') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="trending-item-wrap">
                    <a href="{{ route('search_element_products', ['slug' => 'html']) }}" class="trending-item-one" style="--bg: linear-gradient(135deg, rgba(239, 253, 250, 1) 0%, rgba(224, 250, 241, 1) 100%)">
                        <div class="img"><img src="{{ asset('assets/img/webp/coding.webp') }}" alt=""></div>
                        <p class="title">{{ get_phrase('HTML') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="trending-item-wrap">
                    <a href="{{ route('search_element_products', ['slug' => 'video']) }}" class="trending-item-one" style="--bg: linear-gradient(135deg, rgba(252, 250, 239, 1) 0%, rgba(247, 235, 211, 1) 100%)">
                        <div class="img"><img src="{{ asset('assets/img/webp/video-player.webp') }}" alt=""></div>
                        <p class="title">{{ get_phrase('Video') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="trending-item-wrap">
                    <a href="{{ route('search_element_products', ['slug' => '3d']) }}" class="trending-item-one" style="--bg: linear-gradient(135deg, rgba(244, 235, 254, 1) 0%, rgba(248, 233, 255, 1) 100%)">
                        <div class="img"><img src="{{ asset('assets/img/webp/3d-cube.webp') }}" alt=""></div>
                        <p class="title">{{ get_phrase('3D') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="trending-item-wrap">
                    <a href="{{ route('search_element_products', ['slug' => 'graphics']) }}" class="trending-item-one" style="--bg: linear-gradient(135deg, rgba(228, 250, 255, 1) 0%, rgba(217, 244, 253, 1) 100%)">
                        <div class="img"><img src="{{ asset('assets/img/webp/web-graphics.webp') }}" alt=""></div>
                        <p class="title">{{ get_phrase('Graphics') }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Trending Categoris -->

<!-- Start Faqs -->
<section class="pb-110">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center pb-60">
                    <h2 class="fz-34-sb-black pb-15">{{ get_phrase('Faqs') }}</h2>
                    <p class="fz-16-m-black-2">{{ get_phrase('Here are some helpful answers to your common questions and queries regarding our products') }}</p>
                </div>
            </div>
        </div>
        <!-- Faqs Items -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-wrap">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ get_phrase('Can I use Creative elements templates for my clients?') }}</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('Absolutely! Our templates are made to be flexible and adaptable for your clients, enabling you to develop customized solutions that satisfy the unique needs of your customers and produce your anticipated results') }}.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">{{ get_phrase('Do you provide documentation and support?') }}</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('Yes, we provide thorough documentation and first-rate assistance. Our devoted team is ready to help you with any queries or problems you encounter to make your seamless experience with Creative Elements') }}.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{ get_phrase('How long do I have support access?') }}</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('As long as your package is paid for, you have access to help. Throughout your membership, we\'re available to help and ensure you always have access to our resources') }}.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">{{ get_phrase('What payment methods do you accept?') }}</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('We mainly accept Visa and MasterCard as forms of payment. We do not currently accept PayPal or any other forms of payment') }}.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">{{ get_phrase('What happens after my subscription runs out?') }}</button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('You can only access the products you purchased during the active membership period after your subscription expires. After that, access to any items or upgrades will need to be renewed or purchased separately') }}.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Faqs -->

<!-- Start Review Area -->
<section class="pb-110">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center pb-60">
                    <h3 class="fz-34-sb-black pb-15">{{ get_phrase('What Clients Says') }}</h3>
                    <p class="fz-16-m-black-2">{{ get_phrase('Our satisfied clients shared some precious words about their creative journey with us') }}.</p>
                </div>
            </div>
        </div>
        <!-- Items -->
        <div class="row">
            <div class="col-lg-6">
                <div class="el-review-one-item">
                    <div class="img">
                        <img src="{{ asset('uploads/thumbnails/users/sarah-davis.webp') }}" alt="">
                    </div>
                    <div class="content">
                        <ul class="rating">
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                        </ul>
                        <p class="info">{{ get_phrase('My experience with Creative Elements has been fantastic. The support service is responsive, and the templates are excellent. I\'ve been able to design beautiful websites for my clients, and they are always pleased with the results') }}.</p>
                        <div class="d-flex align-items-end g-10">
                            <h4 class="name">{{ get_phrase('Sarah Davis') }}</h4>
                            <p class="subtitle">{{ get_phrase('Customer, Australia') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="el-review-one-item">
                    <div class="img">
                        <img src="{{ asset('uploads/thumbnails/users/janot-smith.webp') }}" alt="">
                    </div>
                    <div class="content">
                        <ul class="rating">
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                            <li><img src="{{ asset('assets/img/icon/star.svg') }}" alt="" /></li>
                        </ul>
                        <p class="info">{{ get_phrase('I have nothing but praise for Creative Elements. My projects remain current and fresh thanks to their design releases. For my web design business, it has been a game-changer, and I heartily endorse it to other professionals') }}.</p>
                        <div class="d-flex align-items-end g-10">
                            <h4 class="name">{{ get_phrase('Janot Smith') }}</h4>
                            <p class="subtitle">{{ get_phrase('Customer, Canada') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="el-review-all">{{ get_phrase('Check all reviews') }}</a>
        </div>
    </div>
</section>
<!-- End Review Area -->

<!-- Start Blog Area -->
<section class="pb-110">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center pb-50">
                    <h3 class="fz-34-sb-black pb-15">{{ get_phrase('Explore Our Latest Blogs') }}</h3>
                    <p class="fz-16-m-black-2">{{ get_phrase('Learn more about Creative Elements and inspire your creativity from our latest posts') }}.</p>
                </div>
            </div>
        </div>
        <!-- Items -->
        <div class="row justify-content-center">
            @foreach($latest_blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('blog_details', ['slug' => $blog->slug]) }}" class="el-blog-item-one">
                    <div class="img">
                        <img src="{{ asset('uploads/blog/thumbnail_image/' . $blog->thumbnail) }}" alt="">
                    </div>
                    <div class="content">
                        <ul class="topic-date">
                            <li class="item">{{ $blog->blog_to_blogCategory->name }}</li>
                            <li class="item">{{ $blog->created_at->format('M d, Y') }}</li>
                        </ul>
                        <p class="title">{{ $blog->title }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('blog') }}" class="el-review-all">{{ get_phrase('Check all blogs') }}</a>
        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start Ask Questions -->
<section class="el-ask-wrap-one pb-110">
    <div class="container">
        <div class="el-ask-one">
            <div class="img">
                <img src="{{ asset('assets/img/webp/ask-qus-one.webp') }}" alt="">
            </div>
            <div class="content">
                <h3 class="title">{{ get_phrase('Any questions you can ask us') }}</h3>
                <p class="info">{{ get_phrase('If you have any more queries, don\'t hesitate to ask us anything - We\'re here to help you throughout your journey with us!') }}</p>
                <a href="#" class="link">{{ get_phrase('Contact Us') }}</a>
            </div>
        </div>
    </div>
</section>
<!-- End Ask Questions -->

<script type="text/javascript">

  "use strict";

    $(document).ready(function () {
        $('.select-item').click(function (e) {
            e.preventDefault();
            // alert('hi');
            var value = $(this).find('.select-title').text();

            value = value.replace(/[^a-zA-Z0-9]+/g, '-').toLowerCase();

            var newAction = "{{ route('search_element_products', ['selectedValue']) }}";
            newAction = newAction.replace('selectedValue', value);
            
            $('#search-element-form').attr('action', newAction); 
        });
    });


    // $(document).on('click', 'span[data-id]', function (e) {
    //     e.preventDefault()
    // });

    function handleLike(elem){

        var product_id = elem.id;

        var url = "{{ route('handleLike', ['product_id' => ":product_id"]) }}";
        url = url.replace(":product_id", product_id);

        $.ajax({
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (!response) {
                    window.location.replace("{{ route('login') }}");
                } else {
                    if(response.status == 200) {
                        if ($(elem).hasClass('active')) {
                            $(elem).removeClass('active')
                        } else {
                            $(elem).addClass('active')
                        }
                        // toastr.success(response.message);
                        $('.custom_success').addClass('active');
                        $('.custom_success p').text(response.message);
                        setTimeout(function() {
                            $('.custom_success').removeClass('active'); 
                        }, 5000);

                    } else if(response.status == 403) {
                        // toastr.error(response.message);
                        $('.custom_error').addClass('active');
                        $('.custom_error p').text(response.message);
                        setTimeout(function() {
                            $('.custom_error').removeClass('active'); 
                        }, 5000);

                    }
                }
            }, 
            error: function(data){
                // toastr.error(data.responseText);
                $('.custom_error').addClass('active');
                $('.custom_error p').text(data.responseText);
                setTimeout(function() {
                    $('.custom_error').removeClass('active'); 
                }, 5000);

            }
        });
    }

    function handleWishList(elem) {

        var course_id = elem.id;

        var url = "{{ route('handleWishList', ['course_id' => ":course_id"]) }}";
        url = url.replace(":course_id", course_id);

        $.ajax({
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (!response) {
                    window.location.replace("{{ route('login') }}");
                } else {
                    if(response.status == 200) {
                        if ($(elem).hasClass('active')) {
                            $(elem).removeClass('active')
                        } else {
                            $(elem).addClass('active')
                        }
                        // toastr.success(response.message);
                        $('.custom_success').addClass('active');
                        $('.custom_success p').text(response.message);
                        setTimeout(function() {
                            $('.custom_success').removeClass('active'); 
                        }, 5000);

                    } else if(response.status == 403) {
                        // toastr.error(response.message);
                        $('.custom_error').addClass('active');
                        $('.custom_error p').text(response.message);
                        setTimeout(function() {
                            $('.custom_error').removeClass('active'); 
                        }, 5000);
                    }
                }
            },
            error: function(data){
                // toastr.error(data.responseText);
                $('.custom_error').addClass('active');
                $('.custom_error p').text(data.responseText);
                setTimeout(function() {
                    $('.custom_error').removeClass('active'); 
                }, 5000);
            }
        });
    }

</script>

@endsection