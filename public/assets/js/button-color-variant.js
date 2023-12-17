var buttons = document.querySelectorAll('.color-variant-button');

    // Thêm sự kiện click cho mỗi button
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Hủy border màu đỏ ở tất cả các button
            buttons.forEach(function(btn) {
                btn.style.border = '1px solid #F2EFEF';
            });

            // Áp dụng border màu đỏ cho button được click
            this.style.border = '1px solid red';
        });
    });