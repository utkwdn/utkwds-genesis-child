<p align="center">
  <a href="https://www.utk.edu/">
    <img src="https://images.utk.edu/designsystem/2020/assets/i/icon-114x114.png" alt="Power T">
  </a>
</p>

<h3 align="center">University of Tennessee, Knoxville Genesis Child Theme</h3>

---

The UT Genesis Child Theme was made to help UT web developers build interfaces that match UT's visual identity and make consistent the user interface of a variety of digital products, in lieu of the finished Web Design System theme.

---

## Installing this project

### Step 1, Installing the requirements:

The UT Genesis Child Theme uses Node and Gulp to compile and compress Javascript and CSS from source files. To modify this project, you must use Node 14 and Gulp.

1. Not required, but recommended. [Install NVM by following these instructions](https://github.com/nvm-sh/nvm#installing-and-updating). **Mac Users**: If you get an "nvm: command not found" error after running the install script (and you likely will), be sure to [follow the troubleshooting steps](https://github.com/nvm-sh/nvm#troubleshooting-on-macos).
2. Install Node.js **Important**: [Install using NVM (recommended)](https://www.linode.com/docs/guides/how-to-install-use-node-version-manager-nvm/#using-nvm-to-install-node).

### Step 2, Installing the this project:

1. Download or `git clone` this project by typing `git clone git@github.com:utkwdn/utkwds-genesis-child.git`.
2. In your terminal, change to the new `/utkwds-genesis-child/` directory.
3. Ensure you are running Node.js 14 prior to installation, by typing `node -v`
4. Type `npm install` to install dependencies.

---

## Developing or building the theme

The NPM commands are:

- `npm run dev` runs continually and watches the `\src\` directory for changes. When you change a file, it rebuilds the theme in the `\build\` directory.
- `npm run build` will build a testing theme.
- `npm run dist` will minimize all images and css and javascript for production and place a production ready version of the theme in the `\dist\` directory.

**Note**: The JS and CSS is edited in the framework project. The theme references [javascript](https://images.utk.edu/designsystem/v1/latest/assets/js/utk.js) and [css](https://images.utk.edu/designsystem/v1/latest/assets/css/style.css) files on the images server.

---

## Setting up your site the Genesis Theme.

### Step one, install the Genesis Theme

The Genesis Theme can be found on the [StudioPress site](https://www.studiopress.com/themes/genesis/), download it and install it on your site.

### Step two, install the UT Genesis Child Theme

Create the child theme by running `npm run dist` as defined above. The child theme can now be found in the `dist` directory of your project. Install it and activate it on your site.

### Step three, set up your site

Once logged in to the WordPress dashboard, open the customizer (found in "Appearance > Customize") and open the "Header Image" panel. Upload the `powert.png` file included in this repository. Skip cropping, and press publish.

Save your settings and close the customizer, click on "Genesis > Import/Export". Import the Genesis settings using the `genesis-theme-settings.json` file inlcuded in this repository.

Visit "Appearance > Widgets" and remove the widgets from the "Header Right" sidebar.

Create a menu, and apply it to the "Primary Navigation Menu" location.

---

## Other things to know

Your site will likely look a little broken until you create a menu. Your menu should only be one page deep (for the drop downs to work).

There is a sidebar called "Footer Sidebar". It was developed to add content (mostly contact information) to the footer area of your site.

Several patterns have been created, and are categorized with a "WDS" prefix. They work well with our brand and are imagined to be a starting point to help speed up development of content.

There are many features with Genesis, including plugins that add extra, "custom" blocks. We have chosen not to use these, in order to make the transition to the future WDS simpler.

Likewise, there are "Theme SEO" settings that Genesis adds, however we recommend using the [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) plugin.

---

For extra Genesis help, see [Genesis Tutorials](https://genesistutorials.com) and the officieal [Genesis Resources](https://developer.wpengine.com).