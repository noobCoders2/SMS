export function initFormValidation() {

const studentForm = document.getElementById('studentForm');
if (studentForm) {
    // Clear errors on input
    const inputs = studentForm.querySelectorAll('input, select');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            const errorSpan = document.getElementById(`${this.name}_error`);
            if (errorSpan) {
                errorSpan.textContent = '';
            }
        });
    });
    
    studentForm.addEventListener('submit', function(e) {
        let isValid = true;
        const fields = ['last_name', 'first_name', 'program', 'year', 'status'];
        
        fields.forEach(field => {
            const input = document.querySelector(`[name="${field}"]`);
            const errorSpan = document.getElementById(`${field}_error`);
            if (!input.value.trim()) {
                errorSpan.textContent = 'This field is required.';
                isValid = false;
            } else {
                errorSpan.textContent = '';
            }
        });
        
        if (!isValid) {
            e.preventDefault();
        }
    });
}
}