<header id="masthead" class="site-header">
    <div class="horizontal-menu">
        <div class="first-column">
            <h1 class="left-logo">
                Business
            </h1>
        </div>
        <div class="second-column">
            <ul>
                <li class="anchor"><a href="#1">Lorem</a></li>
                <li class="anchor"><a href="#2">Ipsum</a></li>
                <li class="anchor"><a href="#3">Dolor</a></li>
                <li class="anchor"><a href="#4">Sit Amet</a></li>
            </ul>
        </div>
        <button class="menu-toggle" aria-label="Abrir menu">
            <span class="hamburger"></span>
        </button>
    </div>
</header>

<style>
    header {
        position: sticky;
        top: 0;
        background-color: var(--rich-black);
        padding: 1rem;
        z-index: 99;
    }

    .left-logo {
        font-size: 1rem;
        color: var(--platinum);
        text-align: left;
        margin: 0;
    }

    .horizontal-menu {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        background-color: transparent;
        padding: 1rem;
        position: relative;
    }

    .horizontal-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    .horizontal-menu li {
        margin: 0 1rem;
    }

    .horizontal-menu a {
        text-decoration: none;
        color: var(--platinum);
        font-weight: bold;
    }

    .horizontal-menu a:visited {
        color: var(--platinum);
    }

    .horizontal-menu a:hover,
    .horizontal-menu a:focus {
        color: var(--silver-lake-blue);
    }

    .horizontal-menu a:active {
        color: var(--yinmn-blue);
    }

    .menu-toggle {
        display: none;
        background: none;
        border: none;
        cursor: pointer;
        margin-left: 1rem;
    }

    .hamburger {
        width: 30px;
        height: 3px;
        background: var(--platinum);
        display: block;
        position: relative;
    }

    .hamburger::before,
    .hamburger::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 3px;
        background: var(--platinum);
        left: 0;
        transition: 0.3s;
    }

    .hamburger::before {
        top: -10px;
    }

    .hamburger::after {
        top: 10px;
    }

    .anchor {
        text-transform: uppercase;
    }

    @media (max-width: 980px) {
        .horizontal-menu ul {
            display: none;
            flex-direction: column;
            background: var(--rich-black);
            position: absolute;
            top: 60px;
            right: 0;
            width: 270px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 1rem;
        }

        .horizontal-menu ul.active {
            display: flex;
        }

        .menu-toggle {
            display: block;
        }

        .second-column {
            flex: none;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.horizontal-menu ul');
        toggle.addEventListener('click', function() {
            menu.classList.toggle('active');
        });
    });
</script>