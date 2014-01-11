!function(a) {
    "use strict";
    var b = a.GreenSockGlobals || a, c = function(a) {
        var e, c = a.split("."), d = b;
        for (e = 0; e < c.length; e++)
            d[c[e]] = d = d[c[e]] || {};
        return d
    }, d = c("com.greensock.utils"), e = function(a) {
        var b = a.nodeType, c = "";
        if (1 === b || 9 === b || 11 === b) {
            if ("string" == typeof a.textContent)
                return a.textContent;
            for (a = a.firstChild; a; a = a.nextSibling)
                c += e(a)
        } else if (3 === b || 4 === b)
            return a.nodeValue;
        return c
    }, f = document, g = f.defaultView ? f.defaultView.getComputedStyle: function() {}, h = /([A-Z])/g, i = function(a, b, c, d) {
        var e;
        return (c = c || g(a, null)) ? (a = c.getPropertyValue(b.replace(h, "-$1").toLowerCase()), e = a || c.length ? a : c[b]) : a.currentStyle && (c = a.currentStyle, e = c[b]), d ? e : parseInt(e, 10) || 0
    }, j = function(a) {
        return a.length && a[0] && (a[0].nodeType && a[0].style&&!a.nodeType || a[0].length && a[0][0])?!0 : !1
    }, k = function(a) {
        var d, e, f, b = [], c = a.length;
        for (d = 0; c > d; d++)
            if (e = a[d], j(e)
                )for (f = e.length, f = 0; f < e.length; f++)
            b.push(e[f]);
            else
                b.push(e);
        return b
    }, l = ")eefec303079ad17405c", m = /(?:<br>|<br\/>|<br \/>)/gi, n = f.all&&!f.addEventListener, o = "<div style='position:relative;display:inline-block;" + (n ? "*display:inline;*zoom:1;'" : "'"), p = function(a) {
        a = a || "";
        var b =- 1 !== a.indexOf("++"), c = 1;
        return b && (a = a.split("++").join("")), function() {
            return o + (a ? " class='" + a + (b ? c++ : "") + "'>" : ">")
        }
    },  v = d.SplitText = b.SplitText = function(b, c) {
        if ("string" == typeof b && (b = v.selector(b)), !b)
            throw "cannot split a null element.";
        return (this.elements = j(b) ? k(b) : [b], this.chars = [], this.words = [], this.lines = [], this._originals = [], this.vars = c || {}, this.split(c), void 0)
    }, w = function(a, b, c, d, h) {
        m.test(a.innerHTML) && (a.innerHTML = a.innerHTML.replace(m, l));
        var J, K, L, M, N, O, P, Q, R, S, T, U, V, j = e(a), k = b.type || b.split || "chars,words,lines", n =- 1 !== k.indexOf("lines") ? [] : null, o =- 1 !== k.indexOf("words"), q =- 1 !== k.indexOf("chars"), r = "absolute" === b.position || b.absolute===!0, s = r ? "&#173; " : " ", t =- 999, u = g(a), v = i(a, "paddingLeft", u), w = i(a, "borderBottomWidth", u) + i(a, "borderTopWidth", u), x = i(a, "borderLeftWidth", u) + i(a, "borderRightWidth", u), y = i(a, "paddingTop", u) + i(a, "paddingBottom", u), z = i(a, "paddingLeft", u) + i(a, "paddingRight", u), A = i(a, "textAlign", u, !0), B = a.clientHeight, C = a.clientWidth, D = j.length, E = "</div>", F = p(b.wordsClass), G = p(b.charsClass), H =- 1 !== (b.linesClass || "").indexOf("++"), I = b.linesClass;
        for (H && (I = I.split("++").join("")), L = F(), M = 0; D > M; M++)
            O = j.charAt(M), ")" === O && j.substr(M, 20) === l ? (L += E + "<BR/>", M !== D-1 && (L += " " + F()), M += 19) : " " === O && " " !== j.charAt(M-1) && M !== D-1 ? (L += E, M !== D-1 && (L += s + F())) : L += q && " " !== O ? G() + O + "</div>" : O;
        for (a.innerHTML = L + E, N = a.getElementsByTagName("*")
            , D = N.length, P = [], M = 0;
        D > M;
        M++)P[M] = N[M];
        if (n || r)
            for (M = 0; D > M; M++)
                Q = P[M], K = Q.parentNode === a, (K || r || q&&!o) && (R = Q.offsetTop, n && K && R !== t && "BR" !== Q.nodeName && (J = [], n.push(J), t = R), r && (Q._x = Q.offsetLeft, Q._y = R, Q._w = Q.offsetWidth, Q._h = Q.offsetHeight), n && (o !== K && q || (J.push(Q), Q._x -= v), K && M && (P[M-1]._wordEnd=!0)));
        for (M = 0; D > M; M++)
            Q = P[M], K = Q.parentNode === a, "BR" !== Q.nodeName ? (r && (T = Q.style, o || K || (Q._x += Q.parentNode._x, Q._y += Q.parentNode._y), T.left = Q._x + "px", T.top = Q._y + "px", T.position = "absolute", T.display = "block", T.width = Q._w + 1 + "px", T.height = Q._h + "px"), o ? K ? d.push(Q) : q && c.push(Q) : K ? (a.removeChild(Q), P.splice(M--, 1), D--) : !K && q && (R=!n&&!r && Q.nextSibling, a.appendChild(Q), R || a.appendChild(f.createTextNode(" ")), c.push(Q))) : n || r ? (a.removeChild(Q), P.splice(M--, 1), D--) : o || a.appendChild(Q);
        if (n) {
            for (r && (S = f.createElement("div"), a.appendChild(S), U = S.offsetWidth + "px", R = S.offsetParent === a ? 0 : a.offsetLeft, a.removeChild(S)), T = a.style.cssText, a.style.cssText = "display:none;"; a.firstChild;)
                a.removeChild(a.firstChild);
            for (V=!r ||!o&&!q, M = 0; M < n.length; M++) {
                for (J = n[M], S = f.createElement("div")
                    , S.style.cssText = "display:block;text-align:" + A + ";position:" + (r ? "absolute;" : "relative;"), I && (S.className = I + (H ? M + 1 : "")), h.push(S), D = J.length, N = 0;
                D > N;
                N++)"BR" !== J[N].nodeName && (Q = J[N], S.appendChild(Q), V && (Q._wordEnd || o) && S.appendChild(f.createTextNode(" ")), r && (0 === N && (S.style.top = Q._y + "px", S.style.left = v + R + "px"), Q.style.top = "0px", R && (Q.style.left = Q._x - R + "px")));
                o || q || (S.innerHTML = e(S).split(String.fromCharCode(160)).join(" ")), r && (S.style.width = U, S.style.height = Q._h + "px"), a.appendChild(S)
            }
            a.style.cssText = T
        }
        r && (B > a.clientHeight && (a.style.height = B - y + "px", a.clientHeight < B && (a.style.height = B + w + "px")), C > a.clientWidth && (a.style.width = C - z + "px", a.clientWidth < C && (a.style.width = C + x + "px")))
    }, x = v.prototype;
    x.split = function(a) {
        this.isSplit && this.revert(), this.vars = a || this.vars, this._originals.length = this.chars.length = this.words.length = this.lines.length = 0;
        for (var b = 0; b < this.elements.length; b++)
            this._originals[b] = this.elements[b].innerHTML, w(this.elements[b], this.vars, this.chars, this.words, this.lines);
        return this.isSplit=!0, this
    }, x.revert = function() {
        if (!this._originals)
            throw "revert() call wasn't scoped properly.";
        for (var a = this._originals.length; --a>-1;)
            this.elements[a].innerHTML = this._originals[a];
        return this.chars = [], this.words = [], this.lines = [], this.isSplit=!1, this
    }, v.selector = a.$ || a.jQuery || function(b) {
        return a.$ ? (v.selector = a.$, a.$(b)) : f ? f.getElementById("#" === b.charAt(0) ? b.substr(1) : b) : b
    }
}(window || {});
