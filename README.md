# MYCALCULATOR #

Tiny example of a calculator using Symfony 5.4.

## Requirements

To deploy this project locally you will need Docker, Docker Compose, NPM or YARN.

To start the container you will need to be available the port 8080.

## Clone the project

The first step will be to clone the project locally using:

```shell
git clone git@github.com:jarenal/mycalculator.git
```

or

```shell
git clone https://github.com/jarenal/mycalculator.git
```

## Install PHP vendor dependencies

To install PHP vendor dependencies you have to follow the next steps.

```shell
cd src
composer install
```

## Install JavaScript vendor dependencies

To install the JavaScript vendor dependencies you have to follow the next steps.

Using NPM:

```shell
cd src
npm install
```

Using Yarn:

```shell
cd src
yarn install
```

## Build and compile static assets for DEV

To build and compile the static assets for DEV follow the next steps.

Using NPM:
```shell
cd src
npm run dev
```

Using YARN:
```shell
cd src
yarn dev
```

## Build and compile static assets for PRODUCTION

To build and compile the static assets for PRODUCTION follow the next steps.

Using NPM:
```shell
cd src
npm run build
```

Using YARN:
```shell
cd src
yarn build
```

## Run the Container

To run the Docker container use this command form the repository root folder.

```shell
docker-compose up
```

## Open the application in the browser

Go to...

[http://localhost:8080](http://localhost:8080)

...and enjoy it!

## Authors

* **Jose Antonio** - *Initial work*

## License

This project is licensed under the ISC License - see the [LICENSE](LICENSE) file for details