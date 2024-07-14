<style>
    /* Input container */
    .input-container {
        position: relative;
        margin: 30px 20px;
    }

    /* Input field */
    .input-field {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-bottom: 2px solid #ccc;
        outline: none;
        background-color: transparent;
    }

    /* Input label */
    .input-label {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 16px;
        color: rgba(204, 204, 204, 0);
        pointer-events: none;
        transition: all 0.3s ease;
    }

    /* Input highlight */
    .input-highlight {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 2px;
        width: 0;
        background-color: rgba(var(--bs-success-rgb));
        transition: all 0.3s ease;
    }

    /* Input field:focus styles */
    .input-field:focus + .input-label {
        top: -20px;
        font-size: 12px;
        color: rgba(var(--bs-success-rgb));
    }

    .input-field:focus + .input-label + .input-highlight {
        width: 100%;
    }
</style>

<div class="input-container">
  <input id="{{ $key }}" placeholder="{{ $title }}" class="input-field" type="{{ $type }}" name="{{ $key }}" required autocomplete="{{ $key }}" autofocus>
  <label for="input-field" class="input-label">{{ $title }}</label>
  <span class="input-highlight"></span>
</div>
