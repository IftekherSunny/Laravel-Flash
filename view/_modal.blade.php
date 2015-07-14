<div class="modal modal-success fade flash-modal <?php echo (isset($modelClass))? $modelClass : ' ' ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $title }}</h4>
            </div>
            <div class="modal-body">
                <p>{{ $body }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-{{ $dismissType  }}" data-dismiss="modal">{{ $dismissText  }}</button>
                @if($submitButton)
                    <button type="button" class="btn btn-{{ $allowType }}">{{ $allowText  }}</button>
                @endif
            </div>
        </div>
    </div>
</div>
