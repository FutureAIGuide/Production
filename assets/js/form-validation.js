/**
 * Form Validation
 * 
 * Client-side form validation utility
 */

class FormValidator {
  constructor(formId, options = {}) {
    this.form = document.getElementById(formId);
    this.options = {
      errorClass: 'form-error',
      successClass: 'form-success',
      ...options
    };
    
    if (this.form) {
      this.init();
    }
  }

  init() {
    this.form.addEventListener('submit', (e) => this.handleSubmit(e));
    
    // Real-time validation
    const inputs = this.form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
      input.addEventListener('blur', () => this.validateField(input));
      input.addEventListener('input', () => {
        if (input.classList.contains(this.options.errorClass)) {
          this.validateField(input);
        }
      });
    });
  }

  handleSubmit(e) {
    e.preventDefault();
    
    const isValid = this.validateForm();
    
    if (isValid) {
      // Form is valid, proceed with submission
      if (this.options.onSubmit) {
        this.options.onSubmit(this.getFormData());
      } else {
        this.form.submit();
      }
    }
  }

  validateForm() {
    const inputs = this.form.querySelectorAll('input, textarea, select');
    let isValid = true;
    
    inputs.forEach(input => {
      if (!this.validateField(input)) {
        isValid = false;
      }
    });
    
    return isValid;
  }

  validateField(field) {
    const value = field.value.trim();
    const type = field.type;
    const required = field.hasAttribute('required');
    
    // Clear previous errors
    this.clearError(field);
    
    // Required validation
    if (required && !value) {
      this.showError(field, 'This field is required');
      return false;
    }
    
    // Skip other validations if field is empty and not required
    if (!required && !value) {
      return true;
    }
    
    // Email validation
    if (type === 'email') {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(value)) {
        this.showError(field, 'Please enter a valid email address');
        return false;
      }
    }
    
    // URL validation
    if (type === 'url') {
      try {
        new URL(value);
      } catch {
        this.showError(field, 'Please enter a valid URL');
        return false;
      }
    }
    
    // Min length validation
    if (field.hasAttribute('minlength')) {
      const minLength = parseInt(field.getAttribute('minlength'));
      if (value.length < minLength) {
        this.showError(field, `Minimum ${minLength} characters required`);
        return false;
      }
    }
    
    // Max length validation
    if (field.hasAttribute('maxlength')) {
      const maxLength = parseInt(field.getAttribute('maxlength'));
      if (value.length > maxLength) {
        this.showError(field, `Maximum ${maxLength} characters allowed`);
        return false;
      }
    }
    
    // Pattern validation
    if (field.hasAttribute('pattern')) {
      const pattern = new RegExp(field.getAttribute('pattern'));
      if (!pattern.test(value)) {
        this.showError(field, field.getAttribute('data-error-message') || 'Invalid format');
        return false;
      }
    }
    
    // Custom validation
    if (field.hasAttribute('data-validate')) {
      const validationType = field.getAttribute('data-validate');
      const customValidator = this.options.customValidators?.[validationType];
      if (customValidator && !customValidator(value)) {
        this.showError(field, field.getAttribute('data-error-message') || 'Invalid value');
        return false;
      }
    }
    
    return true;
  }

  showError(field, message) {
    field.classList.add(this.options.errorClass);
    
    const errorElement = document.createElement('span');
    errorElement.className = 'form-error';
    errorElement.textContent = message;
    
    const parent = field.parentElement;
    parent.appendChild(errorElement);
  }

  clearError(field) {
    field.classList.remove(this.options.errorClass);
    
    const parent = field.parentElement;
    const errorElement = parent.querySelector('.form-error');
    if (errorElement) {
      errorElement.remove();
    }
  }

  getFormData() {
    const formData = new FormData(this.form);
    const data = {};
    
    for (const [key, value] of formData.entries()) {
      data[key] = value;
    }
    
    return data;
  }

  reset() {
    this.form.reset();
    const inputs = this.form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => this.clearError(input));
  }
}

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
  module.exports = FormValidator;
}
