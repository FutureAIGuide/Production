/**
 * Utility Functions
 * 
 * Common JavaScript utility functions for the website
 */

const Utils = {
  /**
   * Debounce function to limit the rate at which a function can fire
   * @param {Function} func - The function to debounce
   * @param {number} wait - The time to wait in milliseconds
   * @returns {Function}
   */
  debounce(func, wait = 300) {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  },

  /**
   * Throttle function to limit the rate at which a function can fire
   * @param {Function} func - The function to throttle
   * @param {number} limit - The time limit in milliseconds
   * @returns {Function}
   */
  throttle(func, limit = 300) {
    let inThrottle;
    return function executedFunction(...args) {
      if (!inThrottle) {
        func.apply(this, args);
        inThrottle = true;
        setTimeout(() => inThrottle = false, limit);
      }
    };
  },

  /**
   * Add class to element
   * @param {HTMLElement} element - The target element
   * @param {string} className - The class name to add
   */
  addClass(element, className) {
    if (element && className) {
      element.classList.add(className);
    }
  },

  /**
   * Remove class from element
   * @param {HTMLElement} element - The target element
   * @param {string} className - The class name to remove
   */
  removeClass(element, className) {
    if (element && className) {
      element.classList.remove(className);
    }
  },

  /**
   * Toggle class on element
   * @param {HTMLElement} element - The target element
   * @param {string} className - The class name to toggle
   */
  toggleClass(element, className) {
    if (element && className) {
      element.classList.toggle(className);
    }
  },

  /**
   * Check if element has class
   * @param {HTMLElement} element - The target element
   * @param {string} className - The class name to check
   * @returns {boolean}
   */
  hasClass(element, className) {
    return element && className ? element.classList.contains(className) : false;
  },

  /**
   * Get element by selector
   * @param {string} selector - CSS selector
   * @returns {HTMLElement|null}
   */
  $(selector) {
    return document.querySelector(selector);
  },

  /**
   * Get all elements by selector
   * @param {string} selector - CSS selector
   * @returns {NodeList}
   */
  $$(selector) {
    return document.querySelectorAll(selector);
  },

  /**
   * Add event listener with delegation
   * @param {string} selector - CSS selector for the parent
   * @param {string} event - Event type
   * @param {string} childSelector - CSS selector for the child
   * @param {Function} handler - Event handler
   */
  delegate(selector, event, childSelector, handler) {
    const element = this.$(selector);
    if (element) {
      element.addEventListener(event, (e) => {
        if (e.target.matches(childSelector)) {
          handler.call(e.target, e);
        }
      });
    }
  },

  /**
   * Create element with attributes
   * @param {string} tag - HTML tag name
   * @param {Object} attributes - Element attributes
   * @param {string} content - Inner HTML content
   * @returns {HTMLElement}
   */
  createElement(tag, attributes = {}, content = '') {
    const element = document.createElement(tag);
    Object.keys(attributes).forEach(key => {
      if (key === 'class') {
        element.className = attributes[key];
      } else if (key === 'dataset') {
        Object.keys(attributes[key]).forEach(dataKey => {
          element.dataset[dataKey] = attributes[key][dataKey];
        });
      } else {
        element.setAttribute(key, attributes[key]);
      }
    });
    if (content) {
      element.innerHTML = content;
    }
    return element;
  },

  /**
   * Smooth scroll to element
   * @param {string|HTMLElement} target - Target element or selector
   * @param {number} offset - Offset from top in pixels
   */
  scrollTo(target, offset = 0) {
    const element = typeof target === 'string' ? this.$(target) : target;
    if (element) {
      const targetPosition = element.offsetTop - offset;
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    }
  },

  /**
   * Get cookie value
   * @param {string} name - Cookie name
   * @returns {string|null}
   */
  getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
    return null;
  },

  /**
   * Set cookie
   * @param {string} name - Cookie name
   * @param {string} value - Cookie value
   * @param {number} days - Expiration in days
   */
  setCookie(name, value, days = 7) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = `expires=${date.toUTCString()}`;
    document.cookie = `${name}=${value};${expires};path=/`;
  },

  /**
   * Format date
   * @param {Date|string} date - Date to format
   * @param {string} format - Format string
   * @returns {string}
   */
  formatDate(date, format = 'YYYY-MM-DD') {
    const d = new Date(date);
    const map = {
      YYYY: d.getFullYear(),
      MM: String(d.getMonth() + 1).padStart(2, '0'),
      DD: String(d.getDate()).padStart(2, '0'),
      HH: String(d.getHours()).padStart(2, '0'),
      mm: String(d.getMinutes()).padStart(2, '0'),
      ss: String(d.getSeconds()).padStart(2, '0')
    };
    return format.replace(/YYYY|MM|DD|HH|mm|ss/g, matched => map[matched]);
  },

  /**
   * Generate random ID
   * @param {number} length - Length of the ID
   * @returns {string}
   */
  generateId(length = 8) {
    return Math.random().toString(36).substring(2, 2 + length);
  }
};

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
  module.exports = Utils;
}
