<style>
    .logo-img {
        padding-right: 5%;
    }

    .header-transparent {
        background-color: transparent;
        transition: background-color 0.3s ease;
    }

    .header-solid {
        background-color: rgba(255, 255, 255, 1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: Add a shadow for better separation */
    }

    #hero {
        min-height: 440px;
        width: 100%;
        background-image: url("https://cdn.pixabay.com/index/2024/08/01/04-51-06-225_1440x550.jpg");
        -webkit-background-size: cover;
    }

    .h-100 {
        min-height: 440px;
        /*height: 100% !important;*/
        background-color: rgba(0, 0, 0, 0.3);

        h1 {
            margin: 0 0 8px;
            font-size: 32px;
            font-weight: 800;
            box-sizing: border-box;
            text-align: left;
            --vh: 9.58px;
            color: #ffffff;
            font-family: "Open Sans, system-ui";
            cursor: default;
            line-height: 1.5;
            tab-size: 4;
            word-break: break-word;
        }

        h2 {
            font-weight: 400;
            font-size: 14px;
            margin: 0 0 24px;
            color: #fff;
            box-sizing: border-box;
            text-align: left;
            --vh: 9.58px;
            font-family: "Open Sans, system-ui";
            cursor: default;
            line-height: 1.5;
            tab-size: 4;
            word-break: break-word;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(25, 27, 38, .08);
            border: 1px solid #ebecf0;
            height: 56px;
            padding: 0 0 0 24px;
            border-radius: 56px;
            width: 100%;
            display: flex;
            align-items: center;
            position: relative;
            box-sizing: border-box;
            text-align: left;
            color: #fff;
            font-size: 14px;
            font-weight: 400;
            --vh: 9.58px;
            font-family: "Open Sans, system-ui";
            cursor: default;
            line-height: 1.5;
            tab-size: 4;
            word-break: break-word;
        }

    }

    .bg-pixabay {
        background-color: #00ab6b;
    }

    .text-pixabay {
        color: #00ab6b;
    }

    .tooltip-icon {
        cursor: pointer;
        color: #00ab6b;
        text-decoration: underline;
        text-decoration-style: dotted;
    }

    .nav-link {
        :hover {
            color: #00ab6b;
        }
    }

    .dropdown-submenu {
        padding-left: 20px; /* Adjust this value for indentation */
    }

    .image-wrapper {
        position: relative;
        display: inline-block;
    }

    .img-result {
        width: 100%;
        padding-bottom: 10%;
    }

    .image-wrapper img {
        display: block;
    }

    .icon-overlay {
        position: absolute;
        font-size: 14px; /* Adjust as needed */
        color: #ffffff; /* Adjust as needed */
        background-color: rgba(0, 0, 0, 0.5); /* Optional: background for better visibility */
        padding: 5px;
        border-radius: 50%;
        display: none;
        z-index: 10;
    }

    .icon-overlay:first-of-type {
        top: 10px; /* Adjust as needed */
        left: 10px; /* Adjust as needed */
    }

    .icon-overlay:last-of-type {
        top: 10px; /* Adjust as needed */
        left: 50px; /* Adjust as needed */
    }

    .text-overlay {
        position: absolute;
        bottom: 10px; /* Adjust as needed */
        left: 50%;
        right: -50%;
        transform: translateX(-50%);
        color: #ffffff; /* Adjust as needed */
        background-color: rgba(0, 0, 0, 0.5); /* Optional: background for better visibility */
        padding: 5px;
        border-radius: 5px;
        display: none;
        z-index: 10;
        font-size: 16px; /* Adjust as needed */
    }

    .image-wrapper:hover .icon-overlay,
    .image-wrapper:hover .text-overlay {
        display: block;
    }

    .search-form {
        flex: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 32px;
        box-sizing: border-box;
        text-align: left;
        color: #fff;
        font-size: 14px;
        font-family: "Open Sans, system-ui";
        font-weight: 400;
        --vh: 9.58px;
        cursor: default;
        line-height: 1.5;
        tab-size: 4;
        word-break: break-word;
    }

    .search-button {
        color: #00ab6b;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        background: none;
        cursor: pointer;
        font-size: 24px;
        -webkit-appearance: button;
        font-family: "Open Sans, system-ui";
        font-weight: 400;
        overflow: visible;
        text-transform: none;
        margin: 0;
        box-sizing: border-box;
        text-align: left;
        --vh: 9.58px;
        line-height: 1.5;
        tab-size: 4;
        word-break: break-word;
    }

    .dropdown-menu {
        width: 1000%; /* Adjust the width of the dropdown menu */
        max-width: 800px; /* Optional: Limit the maximum width */
        padding: 1rem; /* Add padding for spacing */
        font-size: 14px;
        font-weight: 400;
    }

    .dropdown-menu .row {
        margin: 0;
    }

    .dropdown-menu .col-menu {
        padding: 10px;
        border-right: 1px solid black; /* Add right border */
    }

    .dropdown-menu .col-menu:last-child {
        border-right: none; /* Remove border for the last column */
    }

    .dropdown-menu .row-social {
        border-top: 1px solid black; /* Add right border */

    }

    .dropdown-item {
        white-space: nowrap;
    }

    .overlay-block {
        position: relative;
        margin-top: -100px; /* Adjust this value based on the overlap you need */
        z-index: 10;
    }

    .overlay-content {
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), #ffffff);
        padding: 50px 0; /* Adjust padding as needed */
        text-align: center;
    }

    .overlay-content .btn {
        position: relative;
    }
</style>
