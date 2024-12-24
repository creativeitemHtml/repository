 {{-- @php $popups = session('popups') ?? []; @endphp

 @if ($popups->count() > 0)
     <article class="popup-container d-none">
         @foreach ($popups as $popup)
             @if ($popup->status)
                 <div class="popup-content">
                     <img src="{{ asset("uploads/popup/{$popup['banner']}") }}" alt="{{ $popup['title'] }}">
                     <button class="closePopup" type="button" aria-label="Close Popup">×</button>
                 </div>
             @endif
         @endforeach
     </article>
 @endif


 <script>
     let timer = 0;
     $(document).ready(function() {
         //   let banner = @json(session('popups'));
         let banner = 0;
         let popupContainer = $('.popup-container');
         let closePopup = $('.closePopup');

         closePopup.on('click', function(e) {
             e.preventDefault();

             // countTime()

             $(this).parent().remove();

             if (!$('.popup-content').length) {
                 popupContainer.remove();
             }
         });

         if (banner.length) {
             setInterval(() => {
                 popupContainer.removeClass('d-none');
             }, 5000);
         }

     });

     function countTime() {
         setInterval(() => {
             timer += 1;
             console.log(timer);
         }, 1000);
     }
 </script> --}}
