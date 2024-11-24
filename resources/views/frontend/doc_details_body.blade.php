@if(!empty($documentation_details))
<div class="doc-main-wrap">
    <!-- Doc title & short description -->
    <div class="doc-title-des bd-b-1">
        <h1 class="title">{{ $article_details->article }}</h1>
        @php
            $doc = reformat_image_path($documentation_details->documentation);
            $start_img_tag_web = '<div class="creative-photo mb-30">';
            $end_img_tag_web = '</div>';

            $start_img_tag_mobile ='<div class="creative-photo creative-mobile-photo mb-30">';
            $end_img_tag_mobile = '</div>';
            
            preg_match_all('/<img[^>]+>/i',$doc, $result);
            preg_match_all('/src="([^"]*)"/', $doc, $src_result);
            $duplicate = array();
            $duplicate = array_count_values($result[0]);
           
            $array_web = array();
            $array_mob = array();
            // print_r($src_result[0]);
            foreach($result[0] as  $key => $image_tag){
                //htmlspecialchars(print_r($image_tag));
                $only_src = str_replace('"', '', str_replace('src="', '', $src_result[0][$key]));
                $view = strpos($only_src, "mobile");
                
                if(!empty($image_tag)){
                    
                    if(strpos($only_src, "mobile") ){
                        
                        if($duplicate[$image_tag] <= 1 ){
                        $mokUp_images = $start_img_tag_mobile. $image_tag.$end_img_tag_mobile;
                        $doc = str_replace($image_tag, $mokUp_images, $doc);
                        }elseif($duplicate[$image_tag] > 1){
                               array_push($array_mob, $image_tag);
                        }
                    } else {
                        if($duplicate[$image_tag] <= 1 ){
                            $mokUp_images = $start_img_tag_web. $image_tag.$end_img_tag_web;
                            $doc = str_replace($image_tag, $mokUp_images, $doc);
                        } elseif($duplicate[$image_tag] > 1){
                            array_push($array_web, $image_tag);
                        }
                    }

                }
            }
            // print_r($array[0]);
            if(count($array_mob) > 1){
            $arr_mob = array_count_values($array_mob);
            $keys_mob = array_keys($arr_mob);
            $values_mob = array_values($keys_mob);
            foreach($values_mob as $value){
                $mokUp_images_mob = $start_img_tag_mobile. $value.$end_img_tag_mobile;
                $doc = str_replace($value, $mokUp_images_mob, $doc);

                }
            }
            if(count($array_web) > 1){
                $arr_web = array_count_values($array_web);
                $keys_web = array_keys($arr_web);
                $values_web = array_values($keys_web);
                foreach($values_web as $value){
                    $mokUp_images_web = $start_img_tag_web. $value.$end_img_tag_web;
                    $doc = str_replace($value, $mokUp_images_web, $doc);

                }
            }

        @endphp

        {!! $doc !!}
    </div>
    <!-- Article popularity -->
    <div class="bg-g-one d-flex justify-content-center justify-content-md-between align-items-center flex-wrap g-10 py-25 px-30 mt-40 mb-40 bd-r-5">
        <h4 class="fz-20-sb-black">{{ get_phrase('Was this article helpful to you?') }}</h4>
        <div class="d-flex g-20">
            <a href="#" class="btn-popularity get-popular">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"/></svg>
                {{ get_phrase('Yes') }} ( 15 )
            </a>
            <a href="#" class="btn-popularity">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"/></svg>
                {{ get_phrase('No') }} ( 10 )
            </a>
        </div>
    </div>
    <!-- Help -->
    <div class="text-center">
        <a href="javascript:;" onclick="support()" class="btn-help">{{ get_phrase('How can we help?') }}</a>
        <p class="fz-16-sb-black pt-20">
            {{ get_phrase('Contact us and we will get back to you as soon as possible') }}
        </p>
    </div>
</div>
@else
<div class="doc-main-wrap">
    <div class="text-left">
        <span>{{ get_phrase('Coming Soon...') }}</span>
    </div>
</div>
@endif