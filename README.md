# Project 2A - CMS

This project is part of the 2A curriculum and focuses on building a Content Management System (CMS). The objective is to simplify the creation of web pages and educate users on managing digital content efficiently.

## Professor
- **Morgan Barbier**: morgan.barbier@unicaen.fr

## Contributors

### Students
- **ZOUGGARI Taha**: taha.zouggari@ensicaen.fr
- **Toujani Mohammed**: mohammed.toujani@ensicaen.fr
- **ZAKRI Hamza**: hamza.zakri@ensicaen.fr

### How to run

#### Things to make sure of beforehand:
- Make sure the port 8081 is not being used and is ready to receive a connection.
- Make sure you have docker's plugins installed in your environment, if you don't, just update your system and run this command:
```bash
sudo apt install docker.io
```
#### To run CMSEnsi:

```bash
git clone https://github.com/Tahazouggari/CMS.git
cd CMS/
docker compose up

```

Then go to your browser and open: 
```bash
localhost:8081/
```

#### How to close CMS:

```bash
sudo docker ps
```
Here you will see two apps running in your environment, one for CMS and the second one for mySQL, to shut them down you need get their CONTAINER IDs and run:

```bash
sudo docker stop REPLACE_WITH_CMS_ID
sudo docker stop REPLACE_WITH_MYSQL_ID
```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

