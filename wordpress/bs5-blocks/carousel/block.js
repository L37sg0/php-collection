import Carousel from "./Carousel";

wp.blocks.registerBlockType(
    'l37sg0/carousel',
    {
        title: 'l37sg0 Carousel',
        icon: 'slides',
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
            // TO DO add edit functionality
            return <Carousel />
        },
        save: function (props) {
           // TO DO add save functionality
            return <Carousel />
        }
    }
)