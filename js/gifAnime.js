function ChangeImg() {
    if (document.images) {
        eval("document." + ChangeImg.arguments[0] +
            ".src=('" + ChangeImg.arguments[1] + "')");
    }
}
