const imageDirectoryPath = "/wp-content/themes/weapon/images/";

jQuery(function () {
  jQuery(".mv--weaponSelector").on("click", function () {
    //TODO フェードで変えたい。bgswitcher
    jQuery(".js-mv").css(
      "background-image",
      `url(${weaponImageFilePath(jQuery(this).data("weapon-id"))})`
    );

    jQuery(".js-mv--h1").text(jQuery(this).data("weapon-name"));

    jQuery(".mv--weaponSelector").removeClass("selected");
    jQuery(this).addClass("selected");
  });
});

function weaponImageFilePath(id) {
  return imageDirectoryPath + "mv--weapon" + id + ".jpeg";
}
