// Tạo biến để lưu vị trí cuộn trang
let lastScrollTop = 0;

// Lắng nghe sự kiện cuộn trang
window.addEventListener("scroll", function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    // Kiểm tra nếu người dùng cuộn xuống và cuộn lên
    if (currentScroll > lastScrollTop) {
        // Nếu cuộn xuống, ẩn header
        document.querySelector("header").classList.add("hide");
    } else {
        // Nếu cuộn lên, hiển thị lại header
        document.querySelector("header").classList.remove("hide");
    }

    // Cập nhật vị trí cuộn
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});
