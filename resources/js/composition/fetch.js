import config from "../api.config";

export async function useUrlQuery(uri, options = {}) {
    let response = null;
    let json = null;
    options = Object.assign(options, {headers: config.headers});
    try {
        const res = await fetch(config.url + uri, options);
        if (res.ok) {
            json = await res.json();
            response = json.data;
        } else {
            json = await res.json();
            console.log(json);
        }
    } catch (e) {
        console.error(e);
    }


    return {response}
}
