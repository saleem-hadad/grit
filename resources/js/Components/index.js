import React from "react";
import ValueMetric from "./Domain/ValueMetric";
import SectionDivider from "./SectionDivider";

const components = {
    'value-metric': ValueMetric,
    'section-divider': SectionDivider
};

export const renderComponent = (component, props, children) => {
    if (typeof components[component] !== "undefined") {
        return React.createElement(components[component], {...props}, children);
    }
}
