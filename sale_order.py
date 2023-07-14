# -*- coding: UTF-8 -*-
# Part of odoo. See LICENSE file for full copyright and licensing details.

from odoo import api, fields, models, _
from odoo.tools.misc import formating

class SaleOrder(models.Model):
    _inherit = "sale.order"


def _add_promo_line(self, default=none):
    order = super().copy(default)
    reward_line = order.get_reward_lines()
    if reward_line:
        reward_line.unlike()
        # order._create_new_no_code_promo_reward_lines()
        programs = order._get_applicable_no_code_promo_program()
