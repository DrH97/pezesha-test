export default {
    bind(el, binding) {
        try {
            const { value } = binding;
            const loader = 'images/loading.gif';
            const fallBackImage = 'images/broken-1.png';
            const img = new Image();
            let loading = loader;
            let error = fallBackImage;
            let original = el.src;
            if (typeof value === 'string') {
                loading = value;
                error = value;
            }
            if (value instanceof Object) {
                loading = value.imageLoader || loader;
                error = value.fallBackImage || fallBackImage;
            }
            img.src = original;
            el.src = loading;
            img.onload = () => {
                el.src = original;
            };
            img.onerror = () => {
                el.src = error;
            };
        } catch (e) {
            console.log(e)
        }
    }
}
