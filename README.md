![WooCommerce and Verify](/assets/images/woo-plus-verify.png)

## About

### Verify
Verify is a reputation protocol that tracks the transaction history of participants (buyers, sellers) and unlocks benefits for those with good reputation.

### WooCommerce
WooCommerce is the most popular eCommerce platform on the web. With 35 million+ downloads, WooCommerce powers almost one-third of all online stores. 

## Getting Started

Using Wordpress and WooCommerce for your store? That's great -- we've set this plugin up to make it incredibly easy for you to start accepting cryptocurrency payments in your online store. This includes Bitcoin and Ethereum for now, but we're striving to add more popular currencies in the near future. The best part? You **won't have to re-integrate new cryptocurrencies**! This plugin uses the Javascript library that automatically pulls the latest version of Verify for each transaction -- making updates *instant*.

Here's what you'll need to get started:

- Your `private_key` and `public_key` from Verify. You'll need these keys to make calls to [the Verify API](https://docs.verify.as/). If you don't have any, contact [team@verify.as](mailto:team@verify.as) to get your keys.
- A functional wordpress installation, running at least version v4.0
- WooCommerce (this is a WooCommerce plugin after all!)

## Setup

1. Clone this repository to your local machine using `git clone https://github.com/verifyas/woocommerce`
2. Move the repository to your `wp-content/plugins` directory
3. Reload your Wordpress admin page and activate the plugin
4. Head over to `WooCommerce` --> `Settings` --> `Checkout` and click on `Verify.as`.
5. Populate your API keys (from above) and hit `Save`

## License

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
