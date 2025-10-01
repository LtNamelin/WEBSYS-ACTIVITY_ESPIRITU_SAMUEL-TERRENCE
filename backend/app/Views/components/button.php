<?php
// components/button.php
// Usage:
// echo view('components/button', ['label' => 'Click Me', 'variant' => 'primary', 'type' => 'submit']);

$type = $type ?? 'button';
$label = $label ?? 'Click Me';
$variant = $variant ?? 'primary'; // primary | secondary | bordered | disabled
$extraClasses = $extraClasses ?? '';

$isDisabled = $variant === 'disabled' ? 'disabled' : '';
?>

<button type="<?= esc($type) ?>" class="btn <?= esc($variant) ?> <?= esc($extraClasses) ?>" <?= $isDisabled ?>>
    <?= esc($label) ?>
</button>

<style>
    .btn {
        display: inline-block;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        text-align: center;
        transition: background-color 0.3s ease, transform 0.2s ease;
        border: none;
    }

    /* --- Variants --- */
    .btn.primary {
        background-color: #F55DC5;
        color: white;
    }

    .btn.primary:hover {
        background-color: #c4459a;
        transform: scale(1.05);
    }

    .btn.secondary {
        background-color: #2E1622;
        color: white;
    }

    .btn.secondary:hover {
        background-color: #441a33;
        transform: scale(1.05);
    }

    .btn.bordered {
        background-color: transparent;
        border: 2px solid white;
        color: white;
    }

    .btn.bordered:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transform: scale(1.05);
    }

    .btn.disabled {
        background-color: #888;
        color: #ccc;
        cursor: not-allowed;
        pointer-events: none;
        opacity: 0.7;
    }

    /* Active press effect for clickable variants */
    .btn:not(.disabled):active {
        transform: scale(0.95);
    }
</style>