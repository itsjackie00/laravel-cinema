<div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" id="content" name="content" required>{{ old('content', $review->content ?? '') }}</textarea>
</div>
<div class="form-group">
    <label for="rating">Rating</label>
    <select class="form-control" id="rating" name="rating" required>
        @for ($i = 0; $i <= 5; $i++)
            <option value="{{ $i }}" {{ (old('rating') ?? $review->rating ?? '') == $i ? 'selected' : '' }}>{{ $i }}</option>
        @endfor
    </select>
</div>