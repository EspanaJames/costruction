import "use strict";
import initButtonAction from "./nav/buttonAction.js";
import { renderHomePanel } from "./nav/homeButton.js";
import { renderStatisticsPanel } from "./nav/statisticsButton.js";
import { renderMaterialPanel } from "./nav/materialButton.js";
import { renderSettingsPanel } from "./nav/settingButton.js";

const map = {
  home: renderHomePanel,
  statistics: renderStatisticsPanel,
  material: renderMaterialPanel,
  setting: renderSettingsPanel,
};

const runInit = () => {
  initButtonAction();
  map.home?.();
  document.querySelectorAll(".navButtons").forEach((btn) =>
    btn.addEventListener("click", (e) => {
      const page = btn.dataset.page?.toLowerCase();
      if (map[page]) {
        e.preventDefault();
        map[page]();
      }
    })
  );
};

document.readyState === "loading"
  ? document.addEventListener("DOMContentLoaded", runInit)
  : runInit();
