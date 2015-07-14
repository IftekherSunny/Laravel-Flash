@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('sunsoft/partials/flash/_modal', ['title' => Session::get('flash_notification.title'), 'body' => Session::pull('flash_notification.message'), 'dismissText' => Session::get('flash_notification.dismissText'), 'allowText' => Session::get('flash_notification.allowText'), 'dismissType' => Session::get('flash_notification.dismissType'), 'allowType' => Session::get('flash_notification.allowType'), 'submitButton' => Session::get('flash_notification.submitButton')])
    @else
        <div class="alert alert-{{ Session::get('flash_notification.level') }} fade in alert-slideup">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>{{ Session::pull('flash_notification.message') }}</p>
        </div>
    @endif
@endif

