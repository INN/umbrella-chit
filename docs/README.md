## Creating a new site umbrella repository using this repository

Using `sitename.org` as an example, and providing full pathnames in front of command-line prompts to help keep you located:

1. When running `vv create`, make notes of the answers you provide to the script.
2. From the directory above the wordpress installation, run `ls`. You should see something that looks like this:
	```
	/vagrant-local/www/sitename-org$ ls
	htdocs/      vvv-hosts    vvv-init.sh  wp-cli.yml
	```
3. Clone this repository:
	```
	/vagrant-local/www/sitename-org$ git clone git@github.com:INN/umbrella-boilerplate.git
	/vagrant-local/www/sitename-org$ ls
	htdocs/      umbrella-boilerplate/ vvv-hosts    vvv-init.sh  wp-cli.yml
	```

