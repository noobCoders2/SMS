import { initExport } from './student/exportStudent.js';
import { initFormValidation } from './student/validationStudent.js';
import { initSearch } from './student/searchStudent.js';
import { initFilterStudent } from './student/filterStudent.js';
import { initStudentModals } from './student/modalStudent.js';

document.addEventListener('DOMContentLoaded', () => {
// Initialize all export functions
initStudentModals();
initFilterStudent();
initExport();
initFormValidation();
initSearch();
});