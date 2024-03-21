const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

window.s_alert = (title = "success", icon = 'success') => {
    Toast.fire({
        icon,
        title
    })
};
window.s_confirm = async (title = "Are you sure?", confirmButtonText = 'Yes, do it!', icon = 'warning') => {
    let result = await Swal.fire({
        title,
        text: "",
        icon,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText
    })
    return result.isConfirmed ? true : false;
}