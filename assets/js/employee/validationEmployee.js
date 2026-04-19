export function initFormValidation() {
    const employeeForm = document.getElementById('employeeForm');
    if (employeeForm) {
        // Clear errors on input
        const inputs = employeeForm.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                const errorSpan = document.getElementById(`${this.name}_error`);
                if (errorSpan) {
                    errorSpan.textContent = '';
                }
            });
        });
        
        employeeForm.addEventListener('submit', function(e) {
            let isValid = true;
            const fields = ['last_name', 'first_name', 'position', 'status'];
            
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

    const editEmployeeForm = document.getElementById('editEmployeeForm');
    if (editEmployeeForm) {
        // Clear errors on input
        const inputs = editEmployeeForm.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                const errorSpan = document.getElementById(`edit_${this.name}_error`);
                if (errorSpan) {
                    errorSpan.textContent = '';
                }
            });
        });
        
        editEmployeeForm.addEventListener('submit', function(e) {
            let isValid = true;
            const fields = ['last_name', 'first_name', 'position', 'status'];
            
            fields.forEach(field => {
                const input = document.querySelector(`#editEmployeeForm [name="${field}"]`);
                const errorSpan = document.getElementById(`edit_${field}_error`);
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
