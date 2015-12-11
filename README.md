# "Hvad siger" pages at Reload!

A simple container. Originally based on @arnested's hvadsigekalms.

For adding new, run:

```
docker run --rm -it -v `pwd`/www:/var/www/html xendk/hvadsiger:latest
```

And hack away at `index.php`, which should be self-explanatory. Create
a pull request when satisfied. Pointing hostnames at the container is
left as an exercise for the reader.
