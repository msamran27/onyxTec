/*!
 * FullCalendar v3.10.0
 * Docs & License: https://fullcalendar.io/
 * (c) 2018 Adam Shaw
 */
!function (e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t(require("fullcalendar"), require("jquery")) : "function" == typeof define && define.amd ? define(["fullcalendar", "jquery"], t) : "object" == typeof exports ? t(require("fullcalendar"), require("jquery")) : t(e.FullCalendar, e.jQuery)
}("undefined" != typeof self ? self : this, function (e, t) {
    return function (e) {
        function t(o) {
            if (r[o]) return r[o].exports;
            var n = r[o] = {i: o, l: !1, exports: {}};
            return e[o].call(n.exports, n, n.exports, t), n.l = !0, n.exports
        }

        var r = {};
        return t.m = e, t.c = r, t.d = function (e, r, o) {
            t.o(e, r) || Object.defineProperty(e, r, {configurable: !1, enumerable: !0, get: o})
        }, t.n = function (e) {
            var r = e && e.__esModule ? function () {
                return e.default
            } : function () {
                return e
            };
            return t.d(r, "a", r), r
        }, t.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }, t.p = "", t(t.s = 270)
    }({
        1: function (t, r) {
            t.exports = e
        }, 2: function (e, t) {
            var r = Object.setPrototypeOf || {__proto__: []} instanceof Array && function (e, t) {
                e.__proto__ = t
            } || function (e, t) {
                for (var r in t) t.hasOwnProperty(r) && (e[r] = t[r])
            };
            t.__extends = function (e, t) {
                function o() {
                    this.constructor = e
                }

                r(e, t), e.prototype = null === t ? Object.create(t) : (o.prototype = t.prototype, new o)
            }
        }, 270: function (e, t, r) {
            Object.defineProperty(t, "__esModule", {value: !0});
            var o = r(1), n = r(271);
            o.EventSourceParser.registerClass(n.default), o.GcalEventSource = n.default
        }, 271: function (e, t, r) {
            function o(e) {
                var t;
                return /^[^\/]+@([^\/\.]+\.)*(google|googlemail|gmail)\.com$/.test(e) ? e : (t = /^https:\/\/www.googleapis.com\/calendar\/v3\/calendars\/([^\/]*)/.exec(e)) || (t = /^https?:\/\/www.google.com\/calendar\/feeds\/([^\/]*)/.exec(e)) ? decodeURIComponent(t[1]) : void 0
            }

            function n(e, t) {
                return e.replace(/(\?.*?)?(#|$)/, function (e, r, o) {
                    return (r ? r + "&" : "?") + t + o
                })
            }

            Object.defineProperty(t, "__esModule", {value: !0});
            var a = r(2), l = r(3), i = r(1), u = function (e) {
                function t() {
                    return null !== e && e.apply(this, arguments) || this
                }

                return a.__extends(t, e), t.parse = function (e, t) {
                    var r;
                    return "object" == typeof e ? r = e : "string" == typeof e && (r = {url: e}), !!r && i.EventSource.parse.call(this, r, t)
                }, t.prototype.fetch = function (e, t, r) {
                    var o = this, n = this.buildUrl(), a = this.buildRequestParams(e, t, r),
                        u = this.ajaxSettings || {}, s = u.success;
                    return a ? (this.calendar.pushLoading(), i.Promise.construct(function (e, t) {
                        l.ajax(l.extend({}, i.JsonFeedEventSource.AJAX_DEFAULTS, u, {
                            url: n,
                            data: a,
                            success: function (r, n, u) {
                                var c, p;
                                o.calendar.popLoading(), r.error ? (o.reportError("Google Calendar API: " + r.error.message, r.error.errors), t()) : r.items && (c = o.gcalItemsToRawEventDefs(r.items, a.timeZone), p = i.applyAll(s, o, [r, n, u]), l.isArray(p) && (c = p), e(o.parseEventDefs(c)))
                            },
                            error: function (e, r, n) {
                                o.reportError("Google Calendar network failure: " + r, [e, n]), o.calendar.popLoading(), t()
                            }
                        }))
                    })) : i.Promise.reject()
                }, t.prototype.gcalItemsToRawEventDefs = function (e, t) {
                    var r = this;
                    return e.map(function (e) {
                        return r.gcalItemToRawEventDef(e, t)
                    })
                }, t.prototype.gcalItemToRawEventDef = function (e, t) {
                    var r = e.htmlLink || null;
                    r && t && (r = n(r, "ctz=" + t));
                    var o = {};
                    return "object" == typeof e.extendedProperties && "object" == typeof e.extendedProperties.shared && (o = e.extendedProperties.shared), {
                        id: e.id,
                        title: e.summary,
                        start: e.start.dateTime || e.start.date,
                        end: e.end.dateTime || e.end.date,
                        url: r,
                        location: e.location,
                        description: e.description,
                        extendedProperties: o
                    }
                }, t.prototype.buildUrl = function () {
                    return t.API_BASE + "/" + encodeURIComponent(this.googleCalendarId) + "/events?callback=?"
                }, t.prototype.buildRequestParams = function (e, t, r) {
                    var o, n = this.googleCalendarApiKey || this.calendar.opt("googleCalendarApiKey");
                    return n ? (e.hasZone() || (e = e.clone().utc().add(-1, "day")), t.hasZone() || (t = t.clone().utc().add(1, "day")), o = l.extend(this.ajaxSettings.data || {}, {
                        key: n,
                        timeMin: e.format(),
                        timeMax: t.format(),
                        singleEvents: !0,
                        maxResults: 9999
                    }), r && "local" !== r && (o.timeZone = r.replace(" ", "_")), o) : (this.reportError("Specify a googleCalendarApiKey. See http://fullcalendar.io/docs/google_calendar/"), null)
                }, t.prototype.reportError = function (e, t) {
                    var r = this.calendar, o = r.opt("googleCalendarError"), n = t || [{message: e}];
                    this.googleCalendarError && this.googleCalendarError.apply(r, n), o && o.apply(r, n), i.warn.apply(null, [e].concat(t || []))
                }, t.prototype.getPrimitive = function () {
                    return this.googleCalendarId
                }, t.prototype.applyManualStandardProps = function (e) {
                    var t = i.EventSource.prototype.applyManualStandardProps.apply(this, arguments),
                        r = e.googleCalendarId;
                    return null == r && e.url && (r = o(e.url)), null != r && (this.googleCalendarId = r, t)
                }, t.prototype.applyMiscProps = function (e) {
                    this.ajaxSettings || (this.ajaxSettings = {}), l.extend(this.ajaxSettings, e)
                }, t.API_BASE = "https://www.googleapis.com/calendar/v3/calendars", t
            }(i.EventSource);
            t.default = u, u.defineStandardProps({
                url: !1,
                googleCalendarId: !1,
                googleCalendarApiKey: !0,
                googleCalendarError: !0
            })
        }, 3: function (e, r) {
            e.exports = t
        }
    })
});