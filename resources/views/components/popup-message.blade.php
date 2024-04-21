@if(session("success-message"))
<div class="popup-message" x-data x-init="setTimeout(()=> {$el.style.display = 'none'}, 3000)">
    <span>
        <i class="fa-solid fa-circle-check"></i>
    </span>
    <p>{{ session("success-message") }}</p>
</div>
@endif
