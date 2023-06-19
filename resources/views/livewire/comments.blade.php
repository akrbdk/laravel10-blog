<div xmlns:livewire="http://www.w3.org/1999/html">
    @foreach($comments as $comment)
        <livewire:comment-item :comment="$comment"/>
    @endforeach

    <livewire:comment-create :post="$post"/>
</div>
