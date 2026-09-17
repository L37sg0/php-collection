wp.blocks.registerBlockType(
    'l37sg0/company-contact',
    {
        title: 'l37sg0 Company Contact',
        icon: 'heart',
        category: 'design',
        attributes: {
            companyName: {type: 'string'},
            companyPhone: {type: 'string'},
            companyAddress: {type: 'string'},
            companyAddress2: {type: 'string'},
            companyCity: {type: 'string'},
            companyState: {type: 'string'},
            companyZip: {type: 'string'}
        },
        edit: function (props) {

            function updateCompanyName(event) {
                props.setAttributes({
                    companyName: event.target.value
                })
            }

            function updateCompanyPhone(event) {
                props.setAttributes({
                    companyPhone: event.target.value
                })
            }

            function updateCompanyAddress(event) {
                props.setAttributes({
                    companyAddress: event.target.value
                })
            }

            function updateCompanyAddress2(event) {
                props.setAttributes({
                    companyAddress2: event.target.value
                })
            }

            function updateCompanyCity(event) {
                props.setAttributes({
                    companyCity: event.target.value
                })
            }

            function updateCompanyState(event) {
                props.setAttributes({
                    companyState: event.target.value
                })
            }

            function updateCompanyZip(event) {
                props.setAttributes({
                    companyZip: event.target.value
                })
            }

            return /*#__PURE__*/ React.createElement(
                "div",
                null,
                /*#__PURE__*/ React.createElement(
                    "div",
                    null,
                    /*#__PURE__*/ React.createElement(
                        "label",
                        {
                            class: "bootstrap-label"
                        },
                        "Company Name"
                    ),
                    /*#__PURE__*/ React.createElement("input", {
                        type: "text",
                        value: props.attributes.companyName,
                        placeholder: "Company Name Here",
                        onChange: updateCompanyName
                    })
                ),
                /*#__PURE__*/ React.createElement(
                    "div",
                    null,
                    /*#__PURE__*/ React.createElement(
                        "label",
                        {
                            class: "bootstrap-label"
                        },
                        "Company Phone"
                    ),
                    /*#__PURE__*/ React.createElement("input", {
                        type: "text",
                        value: props.attributes.companyPhone,
                        placeholder: "Company Phone Here",
                        onChange: updateCompanyPhone
                    })
                ),
                /*#__PURE__*/ React.createElement(
                    "div",
                    null,
                    /*#__PURE__*/ React.createElement(
                        "label",
                        {
                            class: "bootstrap-label"
                        },
                        "Company Address"
                    ),
                    /*#__PURE__*/ React.createElement("input", {
                        type: "text",
                        value: props.attributes.companyAddress,
                        placeholder: "Company Address Here",
                        onChange: updateCompanyAddress
                    })
                ),
                /*#__PURE__*/ React.createElement(
                    "div",
                    null,
                    /*#__PURE__*/ React.createElement(
                        "label",
                        {
                            class: "bootstrap-label"
                        },
                        "Company Address 2"
                    ),
                    /*#__PURE__*/ React.createElement("input", {
                        type: "text",
                        value: props.attributes.companyAddress2,
                        placeholder: "Company Address 2 Here",
                        onChange: updateCompanyAddress2
                    })
                ),
                /*#__PURE__*/ React.createElement(
                    "div",
                    null,
                    /*#__PURE__*/ React.createElement(
                        "label",
                        {
                            class: "bootstrap-label"
                        },
                        "Company City"
                    ),
                    /*#__PURE__*/ React.createElement("input", {
                        type: "text",
                        value: props.attributes.companyCity,
                        placeholder: "Company City Here",
                        onChange: updateCompanyCity
                    })
                ),
                /*#__PURE__*/ React.createElement(
                    "div",
                    null,
                    /*#__PURE__*/ React.createElement(
                        "label",
                        {
                            class: "bootstrap-label"
                        },
                        "Company State"
                    ),
                    /*#__PURE__*/ React.createElement("input", {
                        type: "text",
                        value: props.attributes.companyState,
                        placeholder: "Company State Here",
                        onChange: updateCompanyState
                    })
                ),
                /*#__PURE__*/ React.createElement(
                    "div",
                    null,
                    /*#__PURE__*/ React.createElement(
                        "label",
                        {
                            class: "bootstrap-label"
                        },
                        "Company Zip"
                    ),
                    /*#__PURE__*/ React.createElement("input", {
                        type: "text",
                        value: props.attributes.companyZip,
                        placeholder: "Company Zip Here",
                        onChange: updateCompanyZip
                    })
                )
            );

        },
        save: function (props) {
            return /*#__PURE__*/ React.createElement(
                "div",
                null,
                /*#__PURE__*/ React.createElement(
                    "h3",
                    {
                        class: "boostrap title class"
                    },
                    props.attributes.companyName
                ),
                /*#__PURE__*/ React.createElement("div", null, props.attributes.companyPhone),
                /*#__PURE__*/ React.createElement(
                    "span",
                    null,
                    props.attributes.companyAddress
                ),
                /*#__PURE__*/ React.createElement(
                    "span",
                    null,
                    props.attributes.companyAddress2
                ),
                /*#__PURE__*/ React.createElement(
                    "div",
                    null,
                    /*#__PURE__*/ React.createElement(
                        "span",
                        null,
                        props.attributes.companyCity
                    ),
                    /*#__PURE__*/ React.createElement(
                        "span",
                        null,
                        props.attributes.companyState
                    ),
                    /*#__PURE__*/ React.createElement("span", null, props.attributes.companyZip)
                )
            );
        }
    }
)