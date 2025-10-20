/**
 * Modal Component
 * 
 * JavaScript functionality for modal dialogs
 */

class Modal {
  constructor(modalId) {
    this.modal = document.getElementById(modalId);
    this.backdrop = null;
    this.isOpen = false;
    
    if (this.modal) {
      this.init();
    }
  }

  init() {
    // Create backdrop
    this.backdrop = document.createElement('div');
    this.backdrop.className = 'modal-backdrop';
    this.backdrop.style.display = 'none';
    
    // Close on backdrop click
    this.backdrop.addEventListener('click', () => this.close());
    
    // Close on ESC key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this.isOpen) {
        this.close();
      }
    });
    
    // Find and setup close buttons
    const closeButtons = this.modal.querySelectorAll('[data-modal-close]');
    closeButtons.forEach(btn => {
      btn.addEventListener('click', () => this.close());
    });
  }

  open() {
    if (!this.isOpen) {
      document.body.appendChild(this.backdrop);
      this.backdrop.style.display = 'block';
      this.modal.classList.add('show');
      this.modal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
      this.isOpen = true;
    }
  }

  close() {
    if (this.isOpen) {
      this.backdrop.style.display = 'none';
      if (this.backdrop.parentNode) {
        this.backdrop.parentNode.removeChild(this.backdrop);
      }
      this.modal.classList.remove('show');
      this.modal.style.display = 'none';
      document.body.style.overflow = '';
      this.isOpen = false;
    }
  }

  toggle() {
    if (this.isOpen) {
      this.close();
    } else {
      this.open();
    }
  }
}

// Auto-initialize modals with data attributes
document.addEventListener('DOMContentLoaded', () => {
  const modalTriggers = document.querySelectorAll('[data-modal-target]');
  const modals = new Map();
  
  modalTriggers.forEach(trigger => {
    const modalId = trigger.getAttribute('data-modal-target');
    
    if (!modals.has(modalId)) {
      modals.set(modalId, new Modal(modalId));
    }
    
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const modal = modals.get(modalId);
      if (modal) {
        modal.open();
      }
    });
  });
});

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
  module.exports = Modal;
}
