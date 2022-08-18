Three Livewire components to illustrate a potential issue or (very likely!) an issue with how I have registered a Facade.

I created two LW components called `Cache` and `Request` to see if this was an issue with Facades in general. These work as expected.

Then I created a package with a `Cart` Facade and then a LW component of `Cart` which then results in an error.

Full stack trace available at https://flareapp.io/share/lm2pK8D7#F60
