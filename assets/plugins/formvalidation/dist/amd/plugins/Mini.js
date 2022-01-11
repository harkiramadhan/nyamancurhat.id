var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
define(["require", "exports", "../utils/classSet", "./Framework"], function (require, exports, classSet_1, Framework_1) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    var Mini = (function (_super) {
        __extends(Mini, _super);
        function Mini(opts) {
            return _super.call(this, Object.assign({}, {
                formClass: 'fv-plugins-mini',
                messageClass: 'fv-help-block',
                rowInvalidClass: 'fv-invalid-row',
                rowPattern: /^(.*)col-(sm|md|lg|xl)(-offset)*-[0-9]+(.*)$/,
                rowSelector: '.row',
                rowValidClass: 'fv-valid-row',
            }, opts)) || this;
        }
        Mini.prototype.onIconPlaced = function (e) {
            var type = e.element.getAttribute('type');
            var parent = e.element.parentElement;
            if ('checkbox' === type || 'radio' === type) {
                parent.parentElement.insertBefore(e.iconElement, parent.nextSibling);
                (0, classSet_1.default)(e.iconElement, {
                    'fv-plugins-icon-check': true,
                });
            }
        };
        return Mini;
    }(Framework_1.default));
    exports.default = Mini;
});
