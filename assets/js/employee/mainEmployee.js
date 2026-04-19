import { initEmployeeModals } from './modalEmployee.js';
import { initFilterEmployee } from './filterEmployee.js';
import { initSearch } from './searchEmployee.js';
import { initFormValidation } from './validationEmployee.js';
import { initExport } from './exportEmployee.js';

document.addEventListener('DOMContentLoaded', () => {
    initEmployeeModals();
    initFilterEmployee();
    initSearch();
    initFormValidation();
    initExport();
});
