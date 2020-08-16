<div class="box is-shadowless">
    <div class="level mb-3 is-mobile">
        <div class="level-left">
            <div class="level-item">
                <span class="icon is-small pr-3">
                    <i class="material-icons prefix">short_text</i>
                </span>
            </div>           
            <div class="level-item">            
                <h6 class="subtitle is-6 has-text-grey is-italic mb-0">        
                    {{ $label }}
                </h6>
            </div>
        </div>        
    </div>
    <p class="is-size-5 {{ $classes ?? 'has-text-primary' }}">
        {{ $content }}
    </p>
</div>