
<div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;">
    <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
        <?php foreach ($product_id as $index => $m) : ?>
        <div class="swal2-header">
            <ul class="swal2-progress-steps" style="display: none;"></ul>
            <div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;">
            <h2 class="swal2-title" id="swal2-title" style="display: flex;">Bạn có thực sự muốn xóa sản phẩm <?= $m['name_product']?>?</h2><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button>
        </div>
        <?php endforeach ?>
        <div class="swal2-content">
            <div id="swal2-content" class="swal2-html-container" style="display: none;"></div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;">
            <div class="swal2-range" style="display: none;">
                <input type="range"><output></output>
            </div>
            <select class="swal2-select" style="display: none;"></select>
            <div class="swal2-radio" style="display: none;"></div>
            <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;">
                <input type="checkbox"><span class="swal2-label"></span>
            </label>
            <textarea class="swal2-textarea" style="display: none;"></textarea>
            <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
        </div>
        <div class="swal2-actions">
            <div class="swal2-loader"></div>
            <button type="button" class="swal2-confirm swal2-styled" style="display: inline-block;">Đồng ý</button><button type="button" class="swal2-deny swal2-styled" style="display: none;">Hủy</button><button type="button" class="swal2-cancel swal2-styled" style="display: inline-block;">Hủy</button>
        </div>
        <div class="swal2-footer" style="display: none;"></div>
        <div class="swal2-timer-progress-bar-container">
            <div class="swal2-timer-progress-bar" style="display: none;"></div>
        </div>
    </div>
</div>