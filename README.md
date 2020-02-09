# Laravel Comment Nesting

## Steps

### Setup

```
$ php artisan make:model Video -m
$ php artisan make:model Comment -m

$ php artisan make:migration add_parent_id_to_comment_table --table=comments
```