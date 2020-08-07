Sitepackage for the project "Mainzific Rim"
===========================================

The package serves as a base for TYPO3 9 LTS sites used in the Mainzific Rim adventure.
Young students solve missions in order to save Mainz from a Dino attack and become Certified TYPO3 editors
doing so.

The package contains
--------------------

- the bootstrap package as base for FE output
- the news extension
- an image in fileadmin to start with
- initial content (pages, content elements, necessary sys-folders)
- a preconfigured BE usergroup designed for editors
- a BE user (editor:editor) that uses the group and serves as start
- a BE user (news_editor:news_editor) that has news edition permissions preconfigured
- a BE user (bob.bernsteiner:you_must_not_forget_your_password) that is a base for one of the missions
- a BE user (root:root) that is an admin user
- a preconfigured BE usergroup designed for news editors

How to install
--------------

The easy way (from scratch): All you need is a directory where the doc root for the server configuration can be configured. From command line, execute the composer require command on an empty composer.json.

`composer require t3g/mainzific-rim`

The preconfigured requirements of the site package will provide you with a ready made TYPO3 installation that just needs installation via Install Tool.

The long way (also usable if you want to include the package into on existing setup, but please note that the data import **will truncate most of the key tables!**):

- (set up a TYPO3 instance as usual)
- include the extension (via composer or download)
- go to ExtensionManager, activate the extension.
    - note: bootstrap_package and news get activated, too. No single activation needed.
- when you get logged out, use the user root:root to gain login immediately.
- recreate your own root user, or change the password for root
    - note: do the one or the other, don't leave this temporary user active!

> :warning: **Site Configuration is necessary for multi-language to work - see below for instructions!**

Note:
-----

    Since TYPO3 v9, you will need to provide a site configuration for human readable URLs and working language
    menu out of the box. Since the core is not yet ready to get a site configuration injected with a site package, please
    find an example configuration, that works nicely with this package, in ext:mainzific_rim/Configuration/sites.
    No Error Handling is configured, though.


In a composer based installation, create a folder `config` into your instance root (same level as `public`).
In a traditional installation, create a folder `config` inside the `typo3conf` folder.
Copy the whole `sites` folder from `ext:mainzific_rim/Configuration` into this newly created `config` folder.

Troubleshooting: If your copied sites configuration will not be accepted by TYPO3 (check inside the sites module in BE), you can
have TYPO3 create a site config. Just fill in the form so far it gets accepted for submission. Then, check in the files where the
`config` folder ended up. Then, override the config.yaml with the one from ext:mainzific_rim.

