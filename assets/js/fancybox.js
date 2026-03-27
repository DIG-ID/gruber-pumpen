window.addEventListener("load", () => {
  const needsFancybox =
    $(".eigenprodukte-template")[0] ||
    $(".service-template-default")[0] ||
    $(".page-template-page-gallery")[0] ||
    $(".page-template-page-stay-long-term")[0];

  if (!needsFancybox) return;

  import("@fancyapps/ui").then(({ Fancybox }) => {
    if ($(".eigenprodukte-template")[0] || $(".service-template-default")[0]) {
      Fancybox.bind("[data-fancybox='gallery']", {
        Images: {
          Panzoom: {
            panMode: "mousemove",
            mouseMoveFactor: 1.1,
            mouseMoveFriction: 0.12,
          },
          zoom: true,
        },
        Toolbar: {
          display: {
            right: ["close"],
          },
        },
      });
    }

    if (
      $(".page-template-page-gallery")[0] ||
      $(".page-template-page-stay-long-term")[0]
    ) {
      Fancybox.bind("[data-fancybox]", {
        Images: {
          Panzoom: {
            panMode: "mousemove",
            mouseMoveFactor: 1.1,
            mouseMoveFriction: 0.12,
          },
          zoom: true,
        },
        Toolbar: {
          display: {
            left: [],
            middle: [],
            right: ["close"],
          },
        },
      });
    }
  });
}, false);
