import React from "react";
import ValueMetric from "./Domain/ValueMetric";
import TrendMetric from "./Domain/TrendMetric";
import CompetenciesReport from "./Domain/CompetenciesReport";
import SectionDivider from "./SectionDivider";

const components = {
    'value-metric': ValueMetric,
    'trend-metric': TrendMetric,
    'competencies-report': CompetenciesReport,
    'section-divider': SectionDivider
};

export const renderComponent = (component, props, children) => {
    if (typeof components[component] !== "undefined") {
        return React.createElement(components[component], {...props}, children);
    }
}
